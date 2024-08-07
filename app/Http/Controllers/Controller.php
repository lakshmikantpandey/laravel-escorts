<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Models;
use App\Models\Category;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $models = Models::orderBy('id', 'DESC')->take(5)->get();
        $topModels = Models::orderBy('id', 'DESC')->take(3)->get();
        return view('home', compact('models', 'topModels'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function models(Request $request)
    {
        $city = $request->query('city');
        if ($request->query('city') == '') {
            $city = 'Goa';
        }

        $goaModels = Models::orderBy('id', 'DESC')
            ->where('city', $city)
            ->get();

        return view('pages.models', compact('goaModels'));
    }

    public function gallery(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $models = Models::orderBy('id', 'DESC')->get();
        $topModels = Models::orderBy('id', 'DESC')->take(3)->get();
        return view('pages.gallery', compact('models', 'topModels', 'categories'));
    }

    public function contact(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.contact', compact('categories'));
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin');
        }

        return back()->withErrors(['email' => 'Invalid login credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
