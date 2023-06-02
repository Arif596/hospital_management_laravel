
@extends('layouts.app')

@section('content')
<h1>This admin Dashboard</h1>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
    table, th,td {
  border: 3px solid black;
 
}
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.slider')
      <!-- partial -->
     @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
<div  style="padding:100px">
        <table>
            <tr>
                <th style="padding:10px">Doctor Name</th>
                <th style="padding:10px">phone</th>
                <th style="padding:10px">Speciality</th>
                <th style="padding:10px">room No</th>
                <th style="padding:10px">Image</th>
                <th style="padding:10px">Delete</th>
                <th style="padding:10px">Update</th>
               
            </tr>
            @foreach($data as $doctor)
            <tr>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->phone}}</td>
                <td>{{$doctor->Speciality}}</td>
                <td>{{$doctor->room}}</td>
                <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></img></td>
                <td><a  onclick="return confirm('are you sure delete this doctor')"class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>

            </tr>
            @endforeach
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
@endsection