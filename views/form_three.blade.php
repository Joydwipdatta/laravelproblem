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
          <form action="submit"  method="post">
            @csrf
        @if (Session::has('success'))
 <div class="alert alert-success">
  {{Session::get(success)}}
  @php 
  Session::forget('succcess');
  @endphp
</div>

  @endif
            
           <p class="h1 mt-4  text-center">Education Details</p>
           <p class="h5 mt-4  text-center">{{session('email')}}</p>
           <div class=" col-md-6" >
           <label for="inputState" class="form-label">Select highest qualification:</label>
           <select name="qualification" id="inputState" class="form-select" id="">
            <option value="0" >select option</option>
                <option value="+10">+10</option>
               <option value="H.s">highschool</option>
               <option value="Graduation">Graduation</option>
               <option value="postgraduation">post grauation</option>
             </select>
             @if($errors->has('qualification'))
        <span class="text-danger">{{$errors->first('qualification')}}</span>
    @endif
          </div>
         <div class="col-md-12">
         <label for="" class="form-label">Name of Institution</label>
         <input type="text"  name="institute" class="form-control" id="" placeholder="">
         @if($errors->has('institute'))
        <span class="text-danger">{{$errors->first('institute')}}</span>
    @endif
         </div>
         <div class="col-md-12">
         <label for="" class="form-label">University/board</label>
         <input type="text"  name="university" class="form-control" id="" placeholder="">
         @if($errors->has('university'))
        <span class="text-danger">{{$errors->first('university')}}</span>
    @endif
         </div>
         <div class="col-md-12">
         <label for="" class="form-label">Working/Not working</label>
         <input type="text" class="form-control" name="occupation" id="" placeholder="">
         @if($errors->has('occupation'))
        <span class="text-danger">{{$errors->first('occupation')}}</span>
    @endif
         </div>
         <div class="col-md-12">
         <label for="" class="form-label">Experience</label>
         <input type="text"  name="experience" class="form-control" id="" placeholder="">
         @if($errors->has('experience'))
        <span class="text-danger">{{$errors->first('experience')}}</span>
    @endif
         </div><br> <br>
         <div class="col-12">
    <a href="{{url('form/2')}}"> <button type="button" name="back" id="" class="btn btn-primary ">previous</button></a>
    <button type="submit" name="submit" id="" class="btn btn-primary float-right ">save</button>
  </div>
     </form>
       </div>  
  </body>
</html>