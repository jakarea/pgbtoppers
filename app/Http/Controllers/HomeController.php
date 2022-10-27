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

    public function zoek_ben()
    {
        return view('frontend.zoek-ben');
    }

    public function  ikzoek(Request $request)
    {
        $age = isset($_GET['age']) ? $_GET['age'] : ''; 
        $days = isset($_GET['days']) ? $_GET['days'] : ''; 
        $distance = isset($_GET['distance']) ? $_GET['distance'] : ''; 
        $gender = isset($_GET['gender']) ? $_GET['gender'] : '';  
        $desired = isset($_GET['desired']) ? $_GET['desired'] : ''; 
        $license = isset($_GET['license']) ? $_GET['license'] : ''; 
        $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : ''; 
        $experience = isset($_GET['experience']) ? $_GET['experience'] : ''; 
        $other = isset($_GET['other']) ? $_GET['other'] : ''; 
        $serv = isset($_GET['services']) ? $_GET['services'] : ''; 

        $services =  Service::orderBy('id','desc')->where(['serving' => '' , 'approved' => 1]);
 
        if(!empty($age)){
            foreach($age as $a){
                $services->where('age','like','%'.trim($a).'%');
            }
        }

        if(!empty($days)){
            foreach($days as $d){
                $services->where('days','like','%'.trim($d).'%');
            }
        }

        if(!empty($desired)){
            foreach($desired as $di){
                $services->where('desired','like','%'.trim($di).'%');
            }
        }

        if(!empty($candidate_status)){
            foreach($candidate_status as $cas){
                $services->where('candidate_status','like','%'.trim($cas).'%');
            }
        }

        if(!empty($distance)){
            $services->where('distance','like','%'.trim($distance).'%');
        }
        if(!empty($gender)){
            $services->where('gender','like','%'.trim($gender).'%');
        } 
        
        
        if(!empty($experience)){
            $services->where('experience','like','%'.trim($experience).'%');
        }
        if(!empty($other)){
            $other->where('other','like','%'.trim($other).'%');
        }
        if(!empty($serv)){
            $services->where('services','like','%'.trim($serv).'%');
        }

        $services = $services->paginate(20);
        return view('frontend.ik-zoek',['title' => 'Services Show All', 'services' => $services]);
        
    } 

    public function  ikben()
    {
        
        $age = isset($_GET['age']) ? $_GET['age'] : ''; 
        $days = isset($_GET['days']) ? $_GET['days'] : ''; 
        $distance = isset($_GET['distance']) ? $_GET['distance'] : ''; 
        $gender = isset($_GET['gender']) ? $_GET['gender'] : '';  
        $desired = isset($_GET['desired']) ? $_GET['desired'] : ''; 
        $license = isset($_GET['license']) ? $_GET['license'] : ''; 
        $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : ''; 
        $experience = isset($_GET['experience']) ? $_GET['experience'] : ''; 
        $other = isset($_GET['other']) ? $_GET['other'] : ''; 
        $serv = isset($_GET['services']) ? $_GET['services'] : ''; 
        $spe_exp = isset($_GET['specific_experience']) ? $_GET['specific_experience'] : ''; 
          
        $services =  Service::orderBy('id','desc')->where(['serving' => 1 , 'approved' => 1]);
 
        if(!empty($age)){
            foreach($age as $a){
                $services->where('age','like','%'.trim($a).'%');
            }
        }

        if(!empty($days)){
            foreach($days as $d){
                $services->where('days','like','%'.trim($d).'%');
            }
        }

        if(!empty($desired)){
            foreach($desired as $di){
                $services->where('desired','like','%'.trim($di).'%');
            }
        }

        if(!empty($candidate_status)){
            foreach($candidate_status as $cas){
                $services->where('candidate_status','like','%'.trim($cas).'%');
            }
        }

        if(!empty($distance)){
            $services->where('distance','like','%'.trim($distance).'%');
        }
        if(!empty($gender)){
            $services->where('gender','like','%'.trim($gender).'%');
        } 
        
        
        if(!empty($experience)){
            $services->where('experience','like','%'.trim($experience).'%');
        }
        if(!empty($other)){
            $other->where('other','like','%'.trim($other).'%');
        }
        if(!empty($serv)){
            $services->where('services','like','%'.trim($serv).'%');
        }
        
        if(!empty($spe_exp)){
            $services->where('specific_experience','like','%'.trim($spe_exp).'%');
        }

        $services = $services->paginate(20);
        return view('frontend.ik-ben',['title' => 'Services Show All', 'services' => $services]);
        
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
        $testmonial = Testimonial::orderBy('id','desc')->take(3)->get();
        return view('frontend.onze', compact('testmonial'));
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
        Session::flash('message', 'We hebben je aanvraag in goede orde ontvangen. We nemen zo spoedig mogelijk contact met je op voor de intake.');
        return redirect()->route('frontend.home');
    }


}
