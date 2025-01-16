<?php

namespace App\Http\Middleware;

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

        if ($eleve->isConnected == 0) { // si isConnected == 0 cela veut dire que le parent n'a pas encore changé de mot de passe
            return redirect()->route('change-password', ['phone' => $phone]);
        }
        return $next($request);
    }
}

