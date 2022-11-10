<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      
        <form action="/form/2" method="post">

         @csrf
      @if (Session::has('success'))
 <div class="alert alert-success">
  {{Session::get(success)}}
  @php 
  Session::forget('succcess');
  @endphp
</div>

  @endif


    <p class="h1 mt-4  text-center">Basic information</p>
    <p class="h5 mt-4  text-center">{{session('email')}}</p>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date of birth</label>
    <input type="date" name="dob" class="form-control" id="inputPassword4">
    @if($errors->has('dob'))
        <span class="text-danger">{{$errors->first('dob')}}</span>
    @endif
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="">
    @if($errors->has('address'))
        <span class="text-danger">{{$errors->first('address')}}</span>
    @endif
  </div>
<div class="form-check bt-3" >
<p>Gender:</p>
<input type="radio" id="" name="gender" value="M">
<label for="html" class="form-check-label">male</label>

  <input type="radio" id="" name="gender" value="F">
 <label for="css" class="form-check-label">female</label>

 <input type="radio" id="" name="gender" value="O">
 <label for="javascript"  class="form-check-label">other</label>
</div> 
<a href="{{url('/form')}}"><button type="button"  name="back" id="" class="btn btn-primary">previous</button></a>
<button type="submit" name="submit" id="" class="btn btn-primary float-right ">Next</button>
    </form>
    </div>  
  </body>
</html>