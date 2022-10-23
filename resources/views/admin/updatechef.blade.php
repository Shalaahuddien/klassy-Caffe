<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    
  @include("admin.admincss")

  </head>
  <body>
    
  <div class="container-scroller">
      
   @include("admin.navbar")

    <form action="{{ url('updatefoodchef',$data->id) }}" method="Post" enctype="multipart/form-data">


        @csrf


        <div>
            <label>Chef Name</label>
            <input style="coLor:blue;" type="text" name="name" value="{{ $data->name }}">
        </div>

        <div>
            <label>Speciality</label>
            <input style="coLor:blue;" type="text" name="speciality" value="{{ $data->speciality }}">
        </div>

        <div>
            <label>Old image</label>
            <img height="200" width="200" src="/chefimage/{{ $data->image }}">
        </div>

        <div>
            <label>New Image</label>
            <input  type="file" name="image">
        </div>

        <div>
            
            <input style="coLor:blue;"  type="submit" value="Update chef" required="" >
        </div>
        


    </form>


</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>