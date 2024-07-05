<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function showModels(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $models = Models::orderBy('id', 'DESC')->get();
        return view('admin.pages.models', compact('models', 'categories'));
    }

    public function createModel(Request $request)
    {
        $request->validate([
            'modelName' => 'required',
            'age' => 'required',
            'city' => 'required',
            'detail' => 'required',
            'height' => 'required',
            'categoryId' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = $this->handleImageUpload($request);

        $modelData = new Models;
        $modelData->modelName = $request->modelName;
        $modelData->age = $request->age;
        $modelData->city = $request->city;
        $modelData->detail = $request->detail;
        $modelData->height = $request->height;
        $modelData->categoryId = $request->categoryId;
        $modelData->image = $imageName;
        $save = $modelData->save();

        if ($save) {
            return back()->with('success', 'Model added successfully.');
        } else {
            return back()->with('fail', 'somthing went wrong,try again later');
        }
    }

    public function editModel(Request $request, $id)
    {
        $model = Models::find($id);

        if (!$model) {
            return back()->with('fail', 'Model not found.');
        }

        $request->validate([
            'modelName' => 'required',
            'age' => 'required',
            'city' => 'required',
            'detail' => 'required',
            'height' => 'required',
            'categoryId' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($model->image);

            $imageName = $this->handleImageUpload($request);
            $model->image = $imageName;
        }

        $model->modelName = $request->modelName;
        $model->age = $request->age;
        $model->city = $request->city;
        $model->detail = $request->detail;
        $model->height = $request->height;
        $model->categoryId = $request->categoryId;

        $save = $model->save();

        if ($save) {
            return back()->with('success', 'Model updated successfully.');
        } else {
            return back()->with('fail', 'Something went wrong, try again later.');
        }
    }


    private function handleImageUpload(Request $request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/img/models'), $imageName);
        return $imageName;
    }

    private function deleteImage($imageName)
    {
        if ($imageName) {
            $imagePath = public_path('admin/img/models') . '/' . $imageName;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
    public function deleteModel($id)
    {
        Models::where('id', $id)->delete();
        return back()->with('success', 'Model has been deleted successfully');
    }
}
