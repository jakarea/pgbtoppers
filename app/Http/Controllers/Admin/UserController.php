<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Image;
use Session;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
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

        $users = User::orderBy('id','asc')->where('id',Auth::user()->id)->paginate(20);
        if(Auth::user()->role === 1 || Auth::user()->role === 2){
            $users = User::orderBy('id','asc')->paginate(20);
            
        }
        return view('backend.settings.users.index', compact('users'));
    }

    public function add()
    {   
        if(Auth::user()->role === 1 || Auth::user()->role === 2){
            return view('backend.settings.users.create');
        }

        Session::flash('status', 'warning');
        Session::flash('message', 'You do not have right permissions!');
        return redirect()->back();
    }

    public function strore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required', 
            'role' => 'required',  
            'password' => 'required',  
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        $photo_name = ''; 
        $photo = $request->file('photo');
        if($photo){
            $photo_name = Str::slug($request->name,'-').'-' . time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/thumbnail');
            $img = Image::make($photo->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$photo_name);

            $destinationPath = public_path('/images');
            $photo->move($destinationPath, $photo_name);
        }
   
        $user = new User;
        $user->name = $request->name; 
        $user->email = $request->email; 
        $user->role = $request->role; 
        $user->password = Hash::make($request->password); 
        $user->photo = $photo_name;
        $user->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'User Updated Successfully');
        return redirect()->route('users.index');
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
            'password' => 'nullable|min:6',  
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $user = User::findOrFail($id);

        $photo_name = $user->photo; 
        $photo = $request->file('photo');
        if($photo){
            $photo_name = Str::slug($request->name,'-').'-' . time().'.'.$photo->getClientOriginalExtension();
            $destinationPath = public_path('/images/thumbnail');
            $img = Image::make($photo->getRealPath());
            $img->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$photo_name);

            $destinationPath = public_path('/images');
            $photo->move($destinationPath, $photo_name);
        }
        $user = User::findOrFail($id);
        $user->name = $request->name; 
        $user->email = $request->email; 
        if($request->role){
            $user->role = $request->role; 
        }
        $user->photo = $photo_name; 
        if($request->password){
            $user->password = Hash::make($request->password); 
        }
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
