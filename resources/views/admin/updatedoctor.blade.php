

@extends('layouts.app')

@section('content')
<h1>This admin Dashboard</h1>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label{
            display:inline-block;
            width:200px;
        }
    </style>
    <!-- Required meta tags -->
    <base href="/public">;
    @include('admin.css')
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
        
            <div class="container" align="center" style="padding:100px">
            @if(session()->has('message'))
          <div class="alert alert-success">
            <Button type="button" class="close" data-dismiss="alert">x</Button>
            {{session()->get('message')}}

          </div>
          @endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Doctor Name</label>
        <input type="name" style="color:black ;margin:20px" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label for="">Phone</label>
        <input type="text"  style="color:black ;margin:20px" name="number" value="{{$data->phone}}">
    </div>
    <div>
        <label for="">Speciality</label>
        <input type="text"  style="color:black ;margin:20px" name="name" value="{{$data->Speciality}}">
    </div>
    <div>
        <label for="">room</label>
        <input type="text"  style="color:black ;margin:20px" name="name" value="{{$data->room}}">
    </div>
    <div>
        <label for="">Old Image</label>
        <img width="100" src="doctorimage/{{$data->image}}" alt="">
    </div>
    <div style="padding:10px">
<label for="">Change Image</label>
<input type="file" name="file">
</div>
<div>
    <input type="submit" class="btn btn-primary">
</div>
</form>
            </div>
</div>
        <!-- main-panel ends -->
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