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
        try {
            //l'utilisateur inscris dans academia est celui inscris sur rfsconsulting dans la table userformation
            $userFormations = UserFormation::where('user_id',Auth::user()->id)->get();
           // dd($userFormations);
            foreach ($userFormations as $userFormation) {
                $userFormation->load('Formation');

            }

            $recommandeds = [];
        } catch (\Throwable $th) {
            $userFormations = [];
            // dd($recommandeds);
        }
        $recommandeds = Formation::limit('3')->get();
       

        return Inertia::render('Dashboard',['courses'=>$userFormations,
        'recommandeds'=>$recommandeds]);
    }
}
