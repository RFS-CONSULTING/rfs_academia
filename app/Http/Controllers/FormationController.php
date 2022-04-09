<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\TutoPdf;
use App\Models\TutoVideo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FormationController extends Controller
{
     /**
     * Accueil pour le menu formation
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        return Inertia::render('Formations/Home');
    }
    /**
     * Donnes le choix d'aller vers les ressources vidéos ou pdf|text
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return Inertia::render('Formations/HomeForUser',['formation_id'=>$id]);
    }

    /**
     * affiches la liste des rousources pdf|text pour une formation precise
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index_pdf($id)
    {
        $tutos_pdf = TutoPdf::where('formation_id',$id)->get();
        return Inertia::render('Formations/Pdf',['tutos_pdf'=>$tutos_pdf]);
    }

    /**
     * affiches un tutoriel pdf en particulier
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function single_pdf($id)
    {
        $tutos_pdf = TutoPdf::where('id',$id)->get();
        //dd($tutos_pdf);
        return Inertia::render('Formations/SinglePdf',['tutos'=>$tutos_pdf[0]]);
    }
    /**
     * affiches un tutoriel pdf en particulier
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function single_videos($id)
    {
        $tutos_pdf = TutoVideo::where('id',$id)->get();
       // dd($tutos_pdf);
        return Inertia::render('Formations/SingleVideo',['tutos'=>$tutos_pdf[0]]);
    }

    /**
     * affiches la liste des rousources videos pour une formation precise
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index_videos($id)
    {
        $tutos_video = TutoVideo::where('formation_id',$id)->get();
        return Inertia::render('Formations/Video',['tutos_videos'=>$tutos_video]);
    }

    
}
