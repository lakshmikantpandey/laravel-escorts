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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/img/banners'), $imageName);
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
        $banner = Banners::find($id);

        if (!$banner) {
            return back()->with('fail', 'banner not found.');
        }

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($banner->image);

            $imageName = $this->handleImageUpload($request);
            $banner->image = $imageName;
        }

        $save = $banner->save();

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
        $image->move(public_path('admin/img/banners'), $imageName);
        return $imageName;
    }

    private function deleteImage($imageName)
    {
        if ($imageName) {
            $imagePath = public_path('admin/img/banners') . '/' . $imageName;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    public function deleteBanner($id)
    {
        Banners::where('id', $id)->delete();
        return back()->with('success', 'Banner has been deleted successfully');
    }
}
