<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function showModels(Models $enquiry)
    {
        $models = Models::orderBy('id','DESC')->get();
        return view('admin.pages.models',compact('models'));
    }
   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function destroy(Models $models)
    {
        //
    }
}
