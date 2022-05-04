<?php

namespace App\Http\Controllers;

use App\Models\DataForModule;
use App\Models\Formation;
use App\Models\Module;
use Inertia\Inertia;
use App\Models\TutosModule;
use App\Models\VideosModule;
use Illuminate\Http\Request;

class ModuleContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_lecture($id,$formation)
    {
        # code...
        $module = Module::where('id',$id)->first();
        $textmodules = TutosModule::where('module_id',$id)->get();
        $formation = Formation::where('id',$formation)->first();
        return Inertia::render('Formations/Pdf',['tutos'=>$textmodules,
        'formation'=>$formation,'module'=>$module]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_video($id,$formation)
    {
       $module = Module::where('id',$id)->first();
       $videosmodules = VideosModule::where('module_id',$id)->get();
       $formation = Formation::where('id',$formation)->first();
       return Inertia::render('Formations/Video',['tutos'=>$videosmodules,
        'formation'=>$formation,'module'=>$module]);
    }

    public function show_data($id,$formation)
    {
        $module = Module::where('id',$id)->first();
        $datamodules = DataForModule::where('module_id',$module->id)->get();
       // dd($datamodules);
        $formation = Formation::where('id',$formation)->first();
        return Inertia::render('Formations/Data',['datas'=>$datamodules,
        'formation'=>$formation,'module'=>$module]);
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
