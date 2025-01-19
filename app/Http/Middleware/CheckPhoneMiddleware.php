<?php

namespace App\Http\Middleware;

use App\Models\IdentifiantParent;
use Closure;
use Illuminate\Http\Request;
use App\Models\Eleve;
class CheckPhoneMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (empty($request->phone) && empty($request->password)) {
            return redirect()->back()->withErrors(['phone' => 'Veuillez renseigner toutes les informations.']);
        }
        $phone = $request->input('phone');
        $eleve = Eleve::where('TEL1', $phone)
            ->orWhere('TEL2', $phone)
            ->orWhere('TEL3', $phone)
            ->first();
        if (!$eleve) {
            return redirect()->back()->withErrors(['phone' => 'Numéro de téléphone non trouvé.']);
        }
        // Vérifie si le numéro de téléphone existe dans la table `Identifiants_parents`
        $parent = IdentifiantParent::where('phone', $phone)->first();
        if (!$parent) {
            if ($request->input('password') != $phone) {
                return redirect()->back()->withErrors(['password' => 'Mot de passe incorrect.']);
            }else{
                // Si le numéro n'est pas enregistré, redirige vers "change-password"
                session(['phone' => $phone]);
                return redirect()->route('change-password');
            }
        }
        return $next($request);
    }
}

