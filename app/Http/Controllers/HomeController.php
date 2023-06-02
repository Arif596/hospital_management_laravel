<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hello()
    {
        if(Auth::id()){
      if(Auth::user()->usertype=='0'){
        $doctor=doctor::all();
       return view('user.home',compact('doctor'));
}
   else{
    return view ('admin.home');
}
           
        }
        else{
            return hello()->back();
        }
    }
public function index(){
    if(Auth::id()){
        return redirect('home');
    }
    else{

    
    $doctor=doctor::all();
    return view ('user.home',compact('doctor'));
    }
}
function view(){
    return view('user.appointment');
}
function appointment(Request $req){
    $data= new appointment;
    $data->name=$req->name;
    $data->email=$req->email;
    $data->date=$req->date;
    $data->phone=$req->phone;
    $data->message=$req->message;
    $data->doctor=$req->doctor;
    $data->status='in progress';
    if(Auth::id()){
        $data->user_id=Auth::user()->id;
    }
    $data->save();
return redirect()->back()->with('message','appointment request sucessfully. we will contact with you soons' );
}
function my_appointment(){
    if(Auth::id()){
       
        $userid=Auth::user()->id;
        $appoint=appointment::where('user_id',$userid)->get();
        return view('user.my_appointment',compact('appoint'));
    }
    else{
        return redirect()->back();
    }
   
}
 function delete($id){
    $data=appointment::find($id);
    $data->delete();
    return redirect('my_appointment'); 
    }
    
    
}
