<?php

namespace App\Http\Controllers\Admin;
use App\Models\Intake;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; 
class HomeController extends Controller
{
    public function index() {

        $users = User::orderBy('id','asc')->paginate(20);
        if(Auth::user()->role !== 1){
            $users = User::orderBy('id','asc')->where('id', Auth::user()->id)->paginate(20);
        }
        return view('backend.home',compact('users'));
    }

    public function intake() { 

        
        $intake = Intake::orderBy('id','asc')->paginate(20);
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        return view('backend.intake',['title' => 'Intake Show All', 'intake' => $intake]);
    }

    public function testimonial() {  

        $testmonial = Testimonial::orderBy('id','asc')->paginate(20);
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        return view('backend.testimonial',['title' => 'Testmonial Show All', 'testmonial' => $testmonial]);
    }

    public function add() { 
        
        return view('backend.testimonial-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5048',
        ]);

        $testimonial = New Testimonial();

        if ($files = $request->file('image')) {
            
            $destinationPath = public_path('/images/testimonial'); 
            
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
  
            $insert['image'] = "$profileImage";
         
         }

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description; 
        $testimonial->image = $insert['image']; 
        $testimonial->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'Testimonial Add Successfully');
        return redirect()->route('admin.testimonial');
    }

    public function edit($id)
    {   

        $testimonial = Testimonial::findOrFail($id);  
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        return view('backend.testimonial-edit', compact('testimonial'));
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',  
        ]);

        $testimonial = Testimonial::findOrFail($id); 

       $insert = $testimonial->image;

        if ($files = $request->file('image')) {
            
            $destinationPath = public_path('/images/testimonial'); 
            
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
  
            $insert = "$profileImage";
         
         }

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description; 
        $testimonial->image = $insert; 
        $testimonial->save();

        Session::flash('status', 'Success');
        Session::flash('message', 'Testimonial Edit Successfully');
        return redirect()->route('admin.testimonial');
    }

    public function destroy($id)
    {
        if(Auth::user()->role !== 1){
            return redirect('/');
        }
        $testmonial = Testimonial::find($id);
        $testmonial->delete();
        Session::flash('status', 'Success');
        Session::flash('message', 'Testimonial Deleted Successfully');
        return redirect()->back();
    }

}
