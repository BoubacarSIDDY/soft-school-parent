<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\IdentifiantParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required|confirmed|min:4',
        ]);

        $phone = $request->input('phone');
        $password = $request->input('password');

        $identifiant = IdentifiantParent::where('phone', $phone)->first();

        if (!$identifiant || !Hash::check($password, $identifiant->password)) {
            return back()->withErrors(['login' => 'Identifiants invalides.']);
        }
        // Connexion réussie
        auth()->login($identifiant);
        return redirect()->route('dashboard');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required|confirmed|min:4',
        ]);

        $phone = $request->input('phone');
        $password = Hash::make($request->input('password'));
        $eleve = Eleve::where('TEL1', $phone)
            ->orWhere('TEL2', $phone)
            ->orWhere('TEL3', $phone)
            ->first();
        if (!$eleve) {
            return response()->json(['warning', 'Numéro de téléphone non trouvé.']);
        }
        // Déterminez le nom et prénom
        if ($eleve->TEL1 === $phone) {
            $name = $eleve->NOM1;
            $lastName = $eleve->PRE1;
        } elseif ($eleve->TEL2 === $phone) {
            $name = $eleve->NOM2;
            $lastName = $eleve->PRE2;
        } elseif ($eleve->TEL3 === $phone) {
            $name = $eleve->NOM3;
            $lastName = $eleve->PRE3;
        }
        IdentifiantParent::updateOrCreate(
            ['phone' => $phone],
            ['password' => $password, 'name' => $name, 'lastName' => $lastName]
        );
        $eleve->isConnected = 1;
        $eleve->save();
        return response()->json(['success', 'Mot de passe changé avec succès.']);
    }
}

