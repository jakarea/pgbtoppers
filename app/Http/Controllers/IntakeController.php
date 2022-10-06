<?php

namespace App\Http\Controllers;
use App\Models\Intake;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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
            'looking_for' => 'required', 
            'aggree' => 'required', 
            'permission' => 'required', 
        ]);

        $intakes = New Intake();

        $intakes->name = $request->name;
        $intakes->email = $request->email;
        $intakes->looking_for = $request->looking_for;
        $intakes->dayphone = $request->dayphone;
        $intakes->evephone = $request->evephone;
        $intakes->aggree = $request->aggree;
        $intakes->permission = $request->permission;

        $intakes->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'Contact Info Send Successfully');
        return redirect()->route('intake.index');
    }
}