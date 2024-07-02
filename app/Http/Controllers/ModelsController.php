<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function showModels(Request $request)
    {
        $categories = Category::orderBy('id','DESC')->get();
        $models = Models::orderBy('id','DESC')->get();
        return view('admin.pages.models',compact('models', 'categories'));
    }
   
    public function createModel(Request $request)
    {  
        // dd($request);
        $request->validate([
            'modelName'=>'required',
            'age'=>'required',
            'city'=>'required',
            'height'=>'required',
            'categoryId'=>'required',
            'image' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/models'), $imageName);
        }

        dd($request);

        $modelData = new Models;
        $modelData->modelName = $request->modelName;
        $modelData->age = $request->age;
        $modelData->city = $request->city;
        $modelData->height = $request->height;
        $modelData->categoryId = $request->categoryId;
        $modelData->image = $imageName;
        $save = $modelData->save();

        if($save){
            return back()->with('success','Model added successfully.');
        }
        else
        {
            return back()->with('fail','somthing went wrong,try again later');
        }
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
