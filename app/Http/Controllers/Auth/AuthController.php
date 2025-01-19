<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\IdentifiantParent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (empty($request->phone) && empty($request->password)) {
            return redirect()->back()->withErrors(['phone' => 'Veuillez renseigner toutes les informations.']);
        }
        $identifiant = IdentifiantParent::where('phone', $request->phone)->first();
        if (!$identifiant || !Hash::check($request->password, $identifiant->password) || $identifiant->isActif == 0) {
            return back()->withErrors(['login' => 'Identifiants invalides.']);
        }
        // Connexion réussie
        auth()->login($identifiant);
        return redirect()->route('dashboard');
    }
    /*
     * Fonction qui affiche le formulaire de changement de mot de passe
     */
    public function changePassword(){
        if(!empty(session('phone'))){
            return view('ui.auth.change-password');
        }
        return redirect()->route('login');
    }

    /*
     * Changement de mot de passe
     */
    public function savePassword(Request $request)
    {
        // Définir les règles de validation
        $rules = [
            'password' => 'required|min:4',
            'confirmation_password' => 'required|same:password',
        ];
        // Définir les messages de validation personnalisés
        $messages = [
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 4 caractères.',
            'confirmation_password.required' => 'La confirmation du mot de passe est obligatoire.',
            'confirmation_password.same' => 'Les mots de passe ne correspondent pas.',
        ];
        // Valider les données
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $phone = session('phone');
        $password = Hash::make($request->input('password'));
        $eleve = Eleve::where('TEL1', $phone)
            ->orWhere('TEL2', $phone)
            ->orWhere('TEL3', $phone)
            ->first();
        if (!$eleve) {
            return response()->json(
                [
                    'title' => 'Erreur',
                    'message' => 'Numéro de téléphone non trouvé.',
                    'status' => 'error',
                ]
            );
        }
        $who = '';
        // Déterminez le nom et prénom
        if ($eleve->TEL1 === $phone) {
            $name = $eleve->NOM1;
            $lastName = $eleve->PRE1;
            $who = 'TEL1';
        } elseif ($eleve->TEL2 === $phone) {
            $name = $eleve->NOM2;
            $lastName = $eleve->PRE2;
            $who = 'TEL2';
        } elseif ($eleve->TEL3 === $phone) {
            $name = $eleve->NOM3;
            $lastName = $eleve->PRE3;
            $who = 'TEL3';
        }
        $identifiant = IdentifiantParent::updateOrCreate(
            ['phone' => $phone],
            ['password' => $password, 'name' => $name, 'lastName' => $lastName,'who' => $who]
        );
        Auth::login($identifiant);
        return response()->json(
            [
                'title' => 'Enregistrement',
                'message' => 'Mot de passe changé avec succès.',
                'status' => 'success',
            ]
        );
    }

    /**
     * Destroy an authenticated session.
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        session()->forget('phone');

        return redirect('/');
    }
}

