<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Payment;
use App\Models\Service;
use App\Mail\ServiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session; 


class ServiceController extends Controller
{

    public function index()
    {   
        return view('backend.services');
    }

    public function indexprovider()
    { 
        return view('backend.services-provider');
    }

    public function view($id)
    {   
        return view('backend.services-view');
 
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