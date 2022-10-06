<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\User;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Mailbox;
use App\Mail\ServiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session; 

class ServiceController extends Controller
{

    function sendMailToSeller(Request $request){

        $request->validate([
            'title' => 'required',
            'message' => 'required',
            'receiver_id' => 'required'
        ]);

        $receiver = User::findOrFail($request->receiver_id);
        
        $mailbox = New Mailbox();
        $mailbox->sender_id =  Auth::user()->id;
        $mailbox->receiver_id = $request->receiver_id;
        $mailbox->title = $request->title;
        $mailbox->body = $request->message;
        
        $mailbox->save();

        Mail::to($receiver->email)->cc(env('INTAKE_MAIL'))->send(new ServiceMail($mailbox));

        Session::flash('status', 'Success');
        Session::flash('message', 'Mail sent successfully');
        return redirect()->back();

    }

    public function index()
    { 
        $age = isset($_GET['age']) ? $_GET['age'] : ''; 
        $distance = isset($_GET['distance']) ? $_GET['distance'] : ''; 
        $gender = isset($_GET['gender']) ? $_GET['gender'] : '';  
        $desired = isset($_GET['desired']) ? $_GET['desired'] : ''; 
        $license = isset($_GET['license']) ? $_GET['license'] : ''; 
        $candidate_status = isset($_GET['candidate_status']) ? $_GET['candidate_status'] : ''; 
        $experience = isset($_GET['experience']) ? $_GET['experience'] : ''; 
    
        $services =  Service::orderBy('id','desc')->where('serving',NULL);
 
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

       $services = $services->paginate(1);
 
        return view('backend.services',['title' => 'Services Show All', 'services' => $services]);
    }

    public function indexprovider()
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

       $services = $services->paginate(1);
 
        return view('backend.services-provider',['title' => 'Services Show All', 'services' => $services]);
    }

    public function view($id)
    {  
        $service = Service::find($id);
        return view('backend.services-view',['title' => 'View Services', 'service' => $service]);
 
    }

    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required',
            'distance' => 'required', 
            'gender' => 'required', 
            'days' => 'required', 
            'desired' => 'required', 
            'license' => 'required', 
            'candidate_status' => 'required', 
            'experience' => 'required', 
            'other' => 'required', 
            'services' => 'required', 
        ]);

        $services = New Service();
        $services->user_id = Auth::user()->id; 
        $services->age = $request->age; 
        $services->distance = $request->distance; 
        $services->gender = $request->gender; 
        $services->days = is_array($request->days) ? implode(",", $request->days) : "" ;
        $services->desired = $request->desired; 
        $services->license = $request->license; 
        $services->candidate_status = $request->candidate_status; 
        $services->experience = $request->experience; 
        $services->other = $request->other; 
        $services->services = $request->services;   

        $services->save();

        Mail::to("nayan@yopmail.com")->cc(Auth()->user()->email)->send(new ServiceMail($services));

        Session::flash('status', 'Success');
        Session::flash('message', 'Services Info Send Successfully');
        return redirect()->route('frontend.ikzoek');
    }

    public function providerstore(Request $request)
    {
        if(!Auth::user()->paid){
            return redirect()->back()->with("message", "You need to pay to create your care provider profile!");  
        }

        $request->validate([
            'age' => 'required',
            'distance' => 'required', 
            'gender' => 'required', 
            'days' => 'required', 
            'desired' => 'required', 
            'license' => 'required', 
            'candidate_status' => 'required', 
            'experience' => 'required', 
            'other' => 'required', 
            'services' => 'required', 
            'specific_experience' => 'required', 
        ]);

        $services = New Service();

        $services->user_id = Auth::user()->id; 
        $services->age = $request->age; 
        $services->distance = $request->distance; 
        $services->gender = $request->gender; 
        $services->days = is_array($request->days) ? implode(",", $request->days) : "" ;
        $services->desired = $request->desired; 
        $services->license = $request->license; 
        $services->candidate_status = $request->candidate_status; 
        $services->experience = $request->experience; 
        $services->other = $request->other; 
        $services->services = $request->services;   
        $services->services = $request->services;   
        $services->serving = 1;   
        $services->specific_experience = $request->specific_experience;   

        $services->save();

        Mail::to("nayan@yopmail.com")->cc(Auth()->user()->email)->send(new ServiceMail($services));

        Session::flash('status', 'Success');
        Session::flash('message', 'Services Info Send Successfully');
        return redirect()->route('frontend.ikben');
    }

    public function edit($id)
    {  
        $service = Service::findOrFail($id);
        return view('backend.services-edit',['title' => 'Edit Services', 'service' => $service]);
 
    }


    public function update(Request $request, $id)
    {  

        $request->validate([
            'age' => 'required',
            'distance' => 'required', 
            'gender' => 'required', 
            'days' => 'required', 
            'desired' => 'required', 
            'license' => 'required', 
            'candidate_status' => 'required', 
            'experience' => 'required', 
            'other' => 'required', 
            'services' => 'required', 
            'specific_experience' => 'required', 
        ]);

        $services = Service::find($id);

        $services->user_id = Auth::user()->id;
        $services->age = $request->age; 
        $services->distance = $request->distance; 
        $services->gender = $request->gender; 
        $services->days = is_array($request->days) ? implode(",", $request->days) : "" ;
        $services->desired = $request->desired; 
        $services->license = $request->license; 
        $services->candidate_status = $request->candidate_status; 
        $services->experience = $request->experience; 
        $services->other = $request->other; 
        $services->services = $request->services;     
        $services->specific_experience = $request->specific_experience;


        $services->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'Services Updated Successfully');
        return redirect()->route('services.view',$id);
    }


    public function destroy($id)
    {
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        
        $service = Service::find($id);
        $service->delete();
        Session::flash('status', 'Success');
        Session::flash('message', 'Services Deleted Successfully');
        return redirect()->back();
    }
 
}