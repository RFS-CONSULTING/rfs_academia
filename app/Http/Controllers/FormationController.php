<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Module;
use App\Models\TutoPdf;
use App\Models\Formation;
use App\Models\TutoVideo;
use App\Models\Progression;
use App\Models\TutosModule;
use App\Models\VideosModule;
use Illuminate\Http\Request;
use App\Models\UserFormation;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
     /**
     * Accueil pour le menu formation
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $userFormations = UserFormation::where('email',Auth::user()->email)->get();
        
        foreach ($userFormations as $userFormation) {
            $userFormation->load('Formation');
        }
        return Inertia::render('Formations/Home',['userFormations'=>$userFormations]);
    }
    /**
     * Affiche la liste des modules disponible pour une formation
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $formation = Formation::where('id',$id)->first();
        $modules = Module::where('formation_id',$id)->get();
        //dd($formation);
        return Inertia::render('Formations/HomeForUser',['formation'=>$formation,
        'modules'=>$modules]);
    }

    

    /**
     * affiches un tutoriel pdf en particulier
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function single_pdf($id)
    {
        $tuto = TutosModule::where('id',$id)->first();
        $module = Module::where('id',$tuto->module_id)->first();
        $formation = Formation::where('id',$module->formation_id)->first();
        // if ($tuto_id === null) {
        //     $pdf_progress = Progression::create([
        //         'user_id'=>Auth::id(),
        //         'tutoriel_id'=>$id,
        //         'formation_id'=>$tutos_pdf[0]->formation_id,
        //         'type_formation'=>1
        //     ]);
        // }
        return Inertia::render('Formations/SinglePdf',['tuto'=>$tuto,
        'formation'=>$formation,'module'=>$module]);
    }
    /**
     * affiches un tutoriel pdf en particulier
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function single_videos($id)
    {
        $tuto = VideosModule::where('id',$id)->first();
        $module = Module::where('id',$tuto->module_id)->first();
        $formation = Formation::where('id',$module->formation_id)->first();
        // if ($tuto_id === null) {
        //     $pdf_progress = Progression::create([
        //         'user_id'=>Auth::id(),
        //         'tutoriel_id'=>$id,
        //         'formation_id'=>$tutos_pdf[0]->formation_id,
        //         'type_formation'=>2
        //     ]);
        // }
        return Inertia::render('Formations/SingleVideo',['tuto'=>$tuto,
        'formation'=>$formation,'module'=>$module]);
    }


    
}
