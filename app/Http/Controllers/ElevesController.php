<?php

namespace App\Http\Controllers;

use App\Models\Annee;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Evaluation;
use App\Models\Inscription;
use App\Models\MatiereClasse;
use App\Models\Note;
use Illuminate\Http\Request;

class ElevesController extends Controller
{
    /*
     * Fonction qui renvoie le details des eleves
     */
    public function detailsEleve(Request $request){
        $eleve = Eleve::select('id','MATR','NOMM','PREN','SEXE','DNAI','LIEU','NATI','ADRE','TELE','PAYS','NOM1','PRE1','TEL1','PRO1','NOM2','TEL2','PRE2','PRO2','NOM3','PRE3','TEL3','PRO3')
            ->where('id',$request->route('id'))
            ->first();
        if ($eleve) {
            $inscription = Inscription::getLastInscription($eleve->MATR);
            return view('ui.eleves.details-eleve',
            [
                'eleve' => $eleve,
                'inscription' => $inscription,
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function infoEleve(Request $request)
    {
        $eleve = Eleve::select('id','MATR','NOMM','PREN','SEXE','DNAI','LIEU','NATI','ADRE','TELE','PAYS','NOM1','PRE1','TEL1','PRO1','NOM2','TEL2','PRE2','PRO2','NOM3','PRE3','TEL3','PRO3')
            ->where('id',$request->route('id'))
            ->first();
        $inscription = Inscription::getLastInscription($eleve->MATR);
        return view('partials.info-eleve',
            [
                'eleve' => $eleve,
                'inscription' => $inscription,
            ]);
    }

    /*
     * Fonction qui renvoie les absences
     */
    public function absenceEleve(Request $request){
        $annees = Inscription::getAnneesInscription($request->route('matricule'));
        if ($request->query('annee_id') !== '*'){
            // mettre la requete pour recuperer les donnees
        }
        return view('partials.absence-eleve',
            [
                'annees' => $annees,
                'anneeChoisi' => $request->query('annee_id'),
            ]);
    }

    /*
     * Fonction qui renvoie les notes
     */
    public function noteEleve(Request $request){
        // recuperation de toutes les annees dont l'élève est inscrit
        $annees = Inscription::getAnneesInscription($request->post('matricule'));
        $anneeChoisi = $request->query('annee_id');
        $year = Annee::find($anneeChoisi);
        $title = $year->ANNE;
        // recuperation de l'inscription
        $inscription = Inscription::where('IMATR',$request->post('matricule'))
            ->where('annee_id',$anneeChoisi)
            ->first();
        $evaluations = [];
        $classe = [];
        $matieres_classe = [];
        $notesEleve = [];
        $evaluationChoisi = '';
        if ($inscription) {
            $classe = Classe::find($inscription->classe_id);
            if ($classe && $classe->cycle_id){
                $evaluations = Evaluation::with('composition')
                    ->where(['cycle_id'=> $classe->cycle_id, 'annee_id' => $anneeChoisi])
                    ->get();
            }
            // recuperation des matieres
            $matieres_classe = MatiereClasse::with('matiere')
                ->where('class_id', $inscription->classe_id)
                ->where('annee_id', $anneeChoisi)
                ->get();
            $class_id = $inscription->classe_id;
            if ($request->post('evaluation_id') != null){ // si evaluation est soumise
                $evaluationChoisi = $request->post('evaluation_id');
            }else{
                // recuperation de la premiere evaluation
                $evaluationChoisi = $evaluations->first()->id;
            }
            $eva = Evaluation::with('composition')->where('id', $evaluationChoisi)->first();
            $title .= ' - ' . $eva->label.' '.$eva->composition->label;
            // recuperation des notes
            $notes = Note::whereHas('matiereClass', function($query) use ($class_id) {
                $query->where('class_id', $class_id);
            })->where('evaluation_id', $evaluationChoisi)
                ->where('annee_id', $anneeChoisi)
                ->get();
            if ($notes->count() > 0){
                foreach ($notes as $note){
                    $notesEleve[$note->matiere_class_id] = $note->note;
                }
            }
        }
        return view('partials.note-eleve',
            [
                'annees' => $annees,
                'anneeChoisi' => $anneeChoisi,
                'evaluations' => $evaluations,
                'classe' => $classe,
                'matieres_classe' => $matieres_classe,
                'notesEleve' => $notesEleve,
                'evaluationChoisi' => $evaluationChoisi,
                'title' => $title,
            ]);
    }
}
