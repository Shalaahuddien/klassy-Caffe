<x-app-layout>
 
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
  @include("admin.admincss")

  </head>
  <body>
    
  <div class="container-scroller">
      
   @include("admin.navbar")


  <div class="container">


    <h1>Customer Orders</h1>



    <form action="{{ url('/search') }}" method="get">

    @csrf


  <input type="text" name="search" style="coLor: blue;">

  <input type="submit" value="Search" class="btn btn-succes">




    </form>




    <table>


        <tr Align="center">

        <td style="padding: 30px;">Name</td>
        <td style="padding: 30px;">Phone</td>
        <td style="padding: 30px;">Address</td>
        <td style="padding: 30px;">Foodname</td>
        <td style="padding: 30px;">Price</td>
        <td style="padding: 30px;">Quantity</td>
        <td style="padding: 30px;">Total Price</td>



        </tr>

        @foreach($data as $data)

        <tr Align="center" style="background-coLor: black;">


            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->foodname }}</td>
            <td>{{ $data->price }}$</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price * $data->quantity }}$</td>




        </tr>
        @endforeach




    </table>



</div>

</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>