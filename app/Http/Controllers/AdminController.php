<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    //
    function addview(){
        return view('admin.add_doctor');
    }
    function upload(Request $req){
$doctor= new doctor;
$image=$req->file;
$imagename=time().'.'.$image->getClientOriginalExtension();
$req->file->move('doctorimage',$imagename);
$doctor->image=$imagename;

$doctor->name=$req->name;
$doctor->phone=$req->phone;
$doctor->room=$req->room;
$doctor->speciality=$req->speciality;
$doctor->save();
return redirect('add_doctor')->with('message','record of Doctor added sucessfully');

    }
    //show the appointmnet
    public function showappointment(){
        $data=Appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    // add appointment
    function approved($id)
    {
        $data=Appointment::find($id);
        $data->status='approved';
$data->save();
return redirect('showappointment');

    }
    // confirm the status 
    public function canceled($id){
        $data=appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect('showappointment');
    }
    public function showdoctor(){
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    // delete doctor
    public function deletedoctor($id){
        $data=doctor::find($id);
        $data->delete();
        return redirect('/showdoctor');
    }
    // update doctor
    public function updatedoctor($id){
        $data=doctor::find($id);
        return view('admin.updatedoctor',compact('data'));
    }
    public function editdoctor(Request $req,$id){
        $doctor=doctor::find($id);
        $doctor->name=$req->name;
        $doctor->phone=$req->phone;
        $doctor->speciality=$req->speciality;
        $doctor->room=$req->room;
        $image=$req->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $req->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->save();
        return redirect('showdoctor')->with('message','Doctor Detail updated sucessfully');
    }
}
