<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Module;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Models\DataForModule;

class DataForModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$formation)
    {
        //
        $module = Module::where('id',$id)->first();
        $formation = Formation::where('id',$formation)->first();
        return Inertia::render('Formations/Resource',['module'=>$module,'formation'=>$formation]);
    }

    public function index_data($id,$formation)
    {
        $module = Module::where('id',$id)->first();
        $datamodules = DataForModule::where('module_id',$module->id)->get();
       //dd($datamodules);
        $formation = Formation::where('id',$formation)->first();
        return Inertia::render('Formations/Data',['datas'=>$datamodules,
        'formation'=>$formation,'module'=>$module]);
    }
    public function index_projects($id,$formation)
    {
        # code...
        $module = Module::where('id',$id)->first();
        $datamodules = DataForModule::where('module_id',$module->id)->get();
        $module = Module::where('id',$id)->first();
        $formation = Formation::where('id',$formation)->first();
        return Inertia::render('Formations/Projects',['formation'=>$formation,'module'=>$module]);
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
