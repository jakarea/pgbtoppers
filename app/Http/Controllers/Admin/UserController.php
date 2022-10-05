<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
class UserController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $users = User::orderBy('id','asc')->paginate(20);
        if(Auth::user()->role !== 1){
            $users = User::orderBy('id','asc')->where('id',Auth::user()->id)->paginate(20);
        }
        return view('backend.settings.users.index', compact('users'));
    }

    public function userprofile()
    {   
 
        $user = User::findOrFail(Auth::user()->id);
        
        return view('backend.home', compact('user'));
    }

    public function edit($id)
    {   

        $user = User::findOrFail($id);  
        if(Auth::user()->role !== 1){
            $user = User::findOrFail($id);
        }
        return view('backend.settings.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'role' => 'required',  
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->role = $request->role; 

        $user->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'User Updated Successfully');
        return redirect()->route('users.index');

    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('status', 'Success');
        Session::flash('message', 'User Deleted Successfully');
        return redirect()->back();
    }
}
