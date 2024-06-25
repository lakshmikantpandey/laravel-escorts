<?php

namespace App\Http\Controllers;

use App\Models\Rates;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    public function createRates(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'model_preference'=>'required',
            'city'=>'required',
            'mobile'=>'required|email',
            'message'=>'required'
        ]);

        $rates = new Rates;
        $rates->name = $request->name;
        $rates->age = $request->age;
        $rates->model_preference = $request->model_preference;
        $rates->city = $request->city;
        $rates->mobile = $request->mobile;
        $rates->message = $request->message;
        $save = $rates->save();

        if($save){
            Session::flash('message', 'Enquiry Has Been Sent Successfully!');
            return back();
        }
        else
        {
            return back()->with('fail','somthing went wrong,try again later');
        }
    }
    public function showRates(Rates $rates)
    {
        $rates = Rates::orderBy('id','DESC')->get();
        return view('admin.pages.rates',compact('rates'));
    }
    public function deleteRate($id)
    {
        Rates::where('id',$id)->delete();
        return back()->with('Rates_deleted','Rate has been deleted successfully');
    }
}
