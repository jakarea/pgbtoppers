<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Intake;
use App\Mail\ContactMail;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index()
    { 
        

        $testmonial = Testimonial::orderBy('id','desc')->paginate(3);

        return view('frontend.home',['title' => 'Testmonial Show All', 'testmonial' => $testmonial]);
    }

    public function ikzoek()
    {
        return view('frontend.ik-zoek');
    }

    public function ikzoekview()
    {
        return view('frontend.ik-zoek-view');
    }

    public function ikben()
    {
        if(!Auth::user()->paid){
            return redirect('admin/payment')->with("message", "You need to pay to create your care provider profile!");  
        }
        return view('frontend.ik-ben');
    }
    public function meld()
    {
        return view('frontend.meld');
    }
    public function onze()
    {
        return view('frontend.onze');
    }

    public function searchCareGivers()
    {
        return view('frontend.searchresults');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',  
        ]);

        $intakes = New Intake();

        $intakes->name = $request->name;
        $intakes->email = $request->email; 

        $intakes->save();

        Mail::to("nayan@yopmail.com")->cc($intakes->email)->send(new ContactMail($intakes));

        Session::flash('status', 'Success');
        Session::flash('message', 'Contact Info Send Successfully');
        return redirect()->route('frontend.home');
    }


}
