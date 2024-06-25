<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class CategoryController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createCategory(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $save = $category->save();

        if($save){
            Session::flash('message', 'Category Has Been Sent Successfully!');
            return back();
        }
        else
        {
            return back()->with('fail','somthing went wrong,try again later');
        }
    }
    public function showCategories(Category $category)
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.pages.categories',compact('categories'));
    }
    public function deleteCategory($id)
    {
        Category::where('id',$id)->delete();
        return back()->with('Category_deleted','Category has been deleted successfully');
    }
    
}
