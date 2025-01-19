<?php

namespace App\Http\Controllers;

use App\Models\IdentifiantParent;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;

class ParentsController extends Controller
{
    public function dashboard(){
        $eleves = IdentifiantParent::eleves(Auth::user());
        $garcon = 0;
        $fille = 0;
        if ($eleves->count() > 0){
            foreach ($eleves as &$eleve){
                // recuperation de la derniere inscription de l'eleve
                $inscription = Inscription::getLastInscription($eleve->MATR);
                $eleve->inscription = $inscription;
                if (strtolower($eleve->SEXE) == 'm'){
                    $garcon++;
                }else{
                    $fille++;
                }
            }
        }
        return view('ui.parents.dashboard',
            [
                'eleves' => $eleves,
                'garcon' => $garcon,
                'fille' => $fille
            ]
        );
    }
}
