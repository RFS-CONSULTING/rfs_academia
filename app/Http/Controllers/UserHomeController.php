<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Progression;
use App\Models\TutoPdf;
use App\Models\TutoVideo;
use App\Models\UserFormation;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    //
    public function index()
    {   
        //l'utilisateur inscris dans academia est celui inscris sur rfsconsulting dans la table userformation
        $userFormations = UserFormation::where('email',Auth::user()->email)->get();

        foreach ($userFormations as $userFormation) {
            $userFormation->load('Formation');
        }

        // foreach ($userFormations as $userFormation) {
        // //    dd($userFormation);
        //     $tuto_pdf = TutoPdf::where(['formation_id'=>$userFormation->formation->id])->get();
        //     $tuto_video = TutoVideo::where(['formation_id'=>$userFormation->formation->id])->get();
        //     $totalTutos = count($tuto_pdf) + count($tuto_video);
        //    // dd($totalTutos);
        //     $progressionForFormation = Progression::where(['formation_id'=>$userFormation->formation->id,'user_id'=>Auth::id()])->get();
        //     if ($totalTutos != 0) {
        //         $userFormation->formation->progression = round((count($progressionForFormation)*100)/$totalTutos);
        //     }else{
        //         $userFormation->formation->progression = 0;
        //     }
        //     //dd($formation->progression);
        // }

        return Inertia::render('Dashboard',['userFormations'=>$userFormations]);
    }
}
