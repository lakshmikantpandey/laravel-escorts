<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Session;

class EnquiryController extends Controller
{
    public function createEnquiry(Request $request)
    {  
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'model_preference'=>'required',
            'city'=>'required',
            'mobile'=>'required',
            'message'=>'required'
        ]);


        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->age = $request->age;
        $enquiry->model_preference = $request->model_preference;
        $enquiry->city = $request->city;
        $enquiry->mobile = $request->mobile;
        $enquiry->message = $request->message;
        $save = $enquiry->save();

        if($save){
            return back()->with('success','Enquiry sent successfully! We will cantact you soon.');
        }
        else
        {
            return back()->with('fail','somthing went wrong,try again later');
        }
    }
    public function showEnquiry(Enquiry $enquiry)
    {
        $enquiries = Enquiry::orderBy('id','DESC')->get();
        return view('admin.pages.enquiries',compact('enquiries'));
    }
    public function deleteEnquiry($id)
    {
        Enquiry::where('id',$id)->delete();
        return back()->with('Message_deleted','Enquiry has been deleted successfully');
    }
}
