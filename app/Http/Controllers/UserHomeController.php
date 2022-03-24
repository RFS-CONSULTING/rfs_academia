<?php

namespace App\Http\Controllers;

use App\Models\Formation;
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
        //dd($userFormations[1]->formation);

        foreach ($userFormations as $userFormation) {
            $userFormation->load('Formation');
        }

        return Inertia::render('Dashboard',['userFormations'=>$userFormations]);
    }
}
