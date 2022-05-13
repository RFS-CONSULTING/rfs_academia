<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Formation;
use App\Models\Module;
use App\Models\QuizForModule;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  int  $id module_id
     *@param  int  $id formation_id
     * @return \Illuminate\Http\Response
     */
    public function index($id,$formation)
    {
        //
        $module = Module::where('id',$id)->first();
        $formation = Formation::where('id',$formation)->first();
        $exercices = QuizForModule::where('module_id',$module->id)->get();
        return Inertia::render('Formations/Quiz',['formation'=>$formation,
        'module'=>$module,'exercices'=>$exercices]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($module_id,$formation,$quiz_id)
    {
        //
        $quiz = QuizForModule::where('id',$quiz_id)->first();
        //question du quiz
        $quizQuestions = QuizQuestion::where('quizformodule_id',$quiz->id)->get();
        //dd($quizQuestions);
        $module = Module::where('id',$module_id)->first();
        $formation = Formation::where('id',$module->formation_id)->first();

        return Inertia::render('Formations/QuizQuestion',['questions'=>$quizQuestions,
        'quiz'=>$quiz,'module'=>$module,'formation'=>$formation]);
    }

    public function process(Request $request)
    {
        $questions = $request->request;
        $faileds = [];
        $total = count($questions);
        //dd($total);
        $cotes = 0;
        foreach ($questions as $key => $value) {
            $question = QuizQuestion::where('id',$key)->first();
            if ($value == $question->reponse) {
                $cotes = $cotes + 1;
            }else{
                $faileds[]=$question;
            }
        }
        //dd($faileds);
        return Inertia::render('Formations/ResultatQuiz',['total'=>$total,'cotes'=>$cotes,'questions'=>$faileds]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
