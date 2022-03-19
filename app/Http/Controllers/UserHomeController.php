<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    //
    public function index()
    {   
        $formations = Formation::all();
        //dd($formations);
        return Inertia::render('Dashboard');
    }
}
