<html lang="en">
  <head>
    <style>
      label{
        display:inline-block;
        width:200px;
      }
    </style>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
    
     @include('admin.slider')
      <!-- partial -->
     @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          @if(session()->has('message'))
          <div class="alert alert-success">
            <Button type="button" class="close" data-dismiss="alert">x</Button>
            {{session()->get('message')}}

          </div>
          @endif
          <!-- <h1>Add Doctor</h1> -->
          <div class="container" align="center" style="padding-top:60px">
          <form action="" method="POST" enctype="multipart/form-data">
@csrf
          <div style="padding:15px,width:200px">
            <label>Name</label>
            <input type="text" name="name" style="color:black;" placeholder="Write doctor name">
          </div>

          <div style="padding:15px">
            <label>Phone:</label>
            <input type="text" name="Phone num" style="color:black;" placeholder="Write Phone num">
          </div>
          <div style="padding:15px">
            <label>Speciality::</label>
<select  style="width:200px">
  <option value="">---select---</option>
  <option value="Skin">Skin</option>
  <option value="Heart">Heart</option>
  <option value="Nose">Nose</option>
  <option value="Eyes">Eyes</option>
  <option value="Urologis">Urologist</option>
  <option value="Gestrologists">Gestrologists</option>
</select>

         
            <!-- <input type="text" name="Speciality" style="color:black;" placeholder="Write Speciality"> -->
          </div>
          <div style="padding:15px ,width:200px">
            <label>Room:</label>
            <input type="text" name="Room num" style="color:black;" placeholder="Write Room num">
          </div>
          

          <div style="padding:15px">
            <label> image:</label>
            <input type="file" name="file" style="color:black;"/>
          </div>


          <div style="padding:15px">
        
            <input type="submit" class="btn btn-success"/>
          </div>
          </form>



          </div>
          

       
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>