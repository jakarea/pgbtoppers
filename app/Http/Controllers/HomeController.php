<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Intake;
use App\Models\Service;
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

    public function  ikzoek()
    {
        
        $age = isset($_GET['age']) ? $_GET['age'] : ''; 
        $distance = isset($_GET['distance']) ? $_GET['distance'] : ''; 
        $gender = isset($_GET['gender']) ? $_GET['gender'] : '';  
        $desired = isset($_GET['desired']) ? $_GET['desired'] : ''; 
        $license = isset($_GET['license']) ? $_GET['license'] : ''; 
        $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : ''; 
        $experience = isset($_GET['experience']) ? $_GET['experience'] : ''; 
          
      $services =  Service::orderBy('id','desc')->where('serving',1);
 
       if(!empty($age)){
           $services->where('age','like','%'.trim($age).'%');
       }
       if(!empty($distance)){
           $services->where('distance','like','%'.trim($distance).'%');
       }
       if(!empty($gender)){
           $services->where('gender','like','%'.trim($gender).'%');
       } 
       if(!empty($desired)){
           $services->where('desired','like','%'.trim($desired).'%');
       }
       if(!empty($candidate_status)){
           $services->where('candidate_status','like','%'.trim($candidate_status).'%');
       }
       if(!empty($experience)){
           $services->where('experience','like','%'.trim($experience).'%');
       }

       $services = $services->paginate(10);
 
 
        return view('frontend.ik-zoek',['title' => 'Services Show All', 'services' => $services]);
        
    } 


    public function ikbenview($id)
    {
        $service = Service::find($id);
        return view('frontend.ben-zoek-view',['title' => 'View Services', 'service' => $service]);
    }

    public function ikzoekview($id)
    {
        $service = Service::find($id);
        return view('frontend.ben-zoek-view',['title' => 'View Services', 'service' => $service]);
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

        Mail::to($request->email)->cc(env('INTAKE_MAIL'))->send(new ContactMail($intakes));

        Session::flash('status', 'Success');
        Session::flash('message', 'Contact Info Send Successfully');
        return redirect()->route('frontend.home');
    }


}
