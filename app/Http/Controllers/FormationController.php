<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Tutopdf;
use App\Models\Tutovideo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FormationController extends Controller
{
    /**
     * Donnes le choix d'aller vers les ressources vidéos ou pdf|text
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return Inertia::render('Formations/Home',['formation_id'=>$id]);
    }

    /**
     * affiches la liste des rousources pdf|text pour une formation precise
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index_pdf($id)
    {
        $tutos_pdf = Tutopdf::where('formation_id',$id)->get();
        return Inertia::render('Formations/Pdf',['tutos_pdf'=>$tutos_pdf]);
    }

    /**
     * affiches la liste des rousources videos pour une formation precise
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function index_videos($id)
    {
        $tutos_video = Tutovideo::where('formation_id',$id)->get();
        return Inertia::render('Formations/Video',['tutos_videos'=>$tutos_video]);
    }

    
}
