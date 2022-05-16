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
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
{
     /**
     * Accueil pour le menu formation
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        try {
            $userFormations = UserFormation::where('user_id',Auth::user()->id)->get();
        foreach ($userFormations as $userFormation) {
            $userFormation->load('Formation');
        }
        } catch (\Throwable $th) {
            $userFormations = [];
        }
        $formations = Formation::all();
        return Inertia::render('Formations/Home',['Subscribedcourses'=>$userFormations,
        'courses'=>$formations]);
    }
    /**
     * Affiche la liste des modules disponible pour une formation
     * @param int $id l'identifiant de la formation
     * @return \Illuminate\Http\Response
     */
    public function module($id)
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
     /**
     * affiches une formation et le bouton d'inscription
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {      
        $course = Formation::where('slug',$slug)->first();
        // dd($course->image_path);
        return Inertia::render('Formations/Show',['course'=>$course]);
    }
    /**
     * inscris l'utilisateur a une formation
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function inscription(Request $request)
    {
        $formation_id = $request->course['id'];
        $user_id = Auth::user()->id;
        $userFormation = new UserFormation(['user_id'=>$user_id,'formation_id'=>$formation_id]);
        $userFormation->save();
        return response()->json('ok');
    }
    /**
     * vérifie si un user est inscris à une formation
     * @param int $formation_id
     * @return \Illuminate\Http\Response
     */
    public function isSubscribed($formation_id)
    {
        try {
            $userFormation = UserFormation::where(['user_id'=>Auth::user()->id,
            'formation_id'=>$formation_id])->firstOrFail();

            return response()->json(true);
        } catch (\Throwable $th) {
            return response()->json(false);
        }
    }
    /**
     * fais une recherche
     * @param string $query
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('query');
        $formations = Formation::where('title','like',"%$query%")->get();
        //dd($formations[0]);
        return Inertia::render('Formations/Search',['courses'=>$formations,'searchquery'=>$query]);
        // return view('formations.search',['formations'=>$formations,'searchquery'=>$query]);
    }
}
