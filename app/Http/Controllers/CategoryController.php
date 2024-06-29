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

    public function showCategories(Category $category)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.pages.categories', compact('categories'));
    }
    public function createCategory(Request $request)
    {
        $request->validate([
            'categoryName' => 'required',
        ]);

        $category = new Category;
        $category->categoryName = $request->categoryName;
        $save = $category->save();

        if ($save) {
            // Session::flash('message', 'Category Has Been Sent Successfully!');
            return back()->with('Category_added', 'Category has been created successfully');
        } else {
            return back()->with('fail', 'somthing went wrong,try again later');
        }
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'categoryName' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->categoryName = $request->categoryName;
        $save = $category->save();

        if ($save) {
            return back()->with('Category_updated', 'Category has been updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        return back()->with('Category_deleted', 'Category has been deleted successfully');
    }
}
