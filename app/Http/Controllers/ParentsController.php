<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    private $phoneTuteur;
    public function __construct()
    {
        $this->annee_id = session()->get('annee_id');
        $this->phoneTuteur = session()->get('phoneTuteur');
    }
    public function index(){
        $eleves = Eleve::whereHas('inscriptions', function ($query) {
            $query->where('annee_id', $this->annee_id)
                ->whereNotNull('classe_id'); // Ajoute cette condition pour exclure les inscriptions sans classe
        })
            ->with(['inscriptions' => function ($query) {
                $query->where('annee_id', $this->annee_id)
                    ->whereNotNull('classe_id'); // Ajoute cette condition ici aussi
            }])
            ->get(['id', 'MATR', 'NOMM', 'PREN', 'SEXE']);
    }
}
