<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BannersController extends Controller 
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showBanners(Banners $category)
    {
        $banners = Banners::orderBy('id', 'DESC')->get();
        return view('admin.pages.banners', compact('banners'));
    }
    public function createBanner(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img/banners'), $imageName);
        }

        $banner = new Banners;
        $banner->image = $imageName;
        $save = $banner->save();

        if ($save) {
            return back()->with('Banner_added', 'Banner has been added successfully');
        } else {
            return back()->with('fail', 'somthing went wrong,try again later');
        }
    }

    public function updateBanner(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $banner = Banners::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete('public/img/banners/' . $banner->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/img/banners/', $imageName);

            $banner->image = $imageName;
        }

        $save = $banner->save();

        if ($save) {
            return back()->with('success', 'Banner has been updated successfully');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function deleteBanner($id)
    {
        Banners::where('id', $id)->delete();
        return back()->with('success', 'Banner has been deleted successfully');
    }
}
