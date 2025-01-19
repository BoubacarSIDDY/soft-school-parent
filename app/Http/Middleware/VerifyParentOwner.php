<?php

namespace App\Http\Middleware;

use App\Models\Eleve;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VerifyParentOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Récupérer l'ID de l'élève depuis l'URL
        $eleveId = $request->route('id'); // Assurez-vous que le paramètre est bien nommé "id" dans la route

        // Récupérer le parent authentifié
        $parent = Auth::user();

        // Vérifier si l'élève existe et appartient au parent
        $eleve = Eleve::where('id', $eleveId)
            ->where($parent->who,$parent->phone)
            ->first();

        if (!$eleve) {
            // Retourner une réponse si l'élève n'appartient pas au parent
            return redirect()->route('dashboard');
        }
        return $next($request);
    }
}
