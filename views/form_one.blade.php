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
 <div  class="container">
 <p class="h1 mt-4  text-center">{{session('email')}}</p>
  
   
 <form  class="row g-3 mt-5" action="form" method="post">
  @csrf


 <div class="col-md-6">
    <label for="inputCity" class="form-label">Name</label>
    <input type="text"  name="name"  class="form-control" id="inputCity"  value="">
    @if($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
    @endif
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email"   name="email"  class="form-control" id="inputEmail4"  value="{{session('email')}}">
    @if($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
    @endif
  </div>
 
  <div class="col-md-6">
    <label for="inputCity" class="form-label">phone Number</label>
    <input type="tel"  name="phone"  class="form-control" id="inputCity" pattern="^[6-9][0-9][0-9]{0,9}$" maxlength="10">
    @if($errors->has('phone'))
        <span class="text-danger">{{$errors->first('phone')}}</span>
    @endif
  </div>
  
  <div class=" col-md-4  mt-5" >
    <label for="inputState"  class="form-label">Select course</label>
    <select id="inputState" name="course" class="form-select">
      <option selected value="0">Choose any subject</option>
      <option value="English">English</option>
      <option value="Maths">Maths</option>
      <option value="history">Hitory</option>
    </select>
    @if($errors->has('course'))
        <span class="text-danger">{{$errors->first('course')}}</span>
    @endif
  </div>
  <div class="col-12">
    <button type="submit"  name="submit" class="btn btn-primary" >Next</button>
  </div>
</div>
</form>
</div>

  </body>
</html>