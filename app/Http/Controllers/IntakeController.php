<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class IntakeController extends Controller
{
    public function index()
    {
        return view('frontend.intake');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
           
            'mee_eens_zijn' => 'required',  
        ]);

        $intakes = New Intake();

        $intakes->name = $request->name;
        $intakes->email = $request->email;
        $intakes->dayphone = $request->dayphone;
        $intakes->evephone = $request->evephone;
        $intakes->aggree = $request->mee_eens_zijn;
    

        $intakes->save();
        Mail::to($request->email)->cc(env('INTAKE_MAIL'))->send(new ContactMail($intakes));

        Session::flash('status', 'Success');
        Session::flash('message', 'We hebben je aanvraag in goede orde ontvangen. We nemen zo spoedig mogelijk contact met je op voor de intake.');
        return redirect()->route('intake.index');
    }
}