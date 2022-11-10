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
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/index')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/enter')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
     <!--    body--->
     <div class="container">
  <form action="/loginuser" method="post">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label"> Email</label>
    <input type="email" class="form-control" id="" name="email" placeholder="enter email">
    @if($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
    @endif
    </div> 
    <div class="mb-3">
    <label for="" class="form-label">password</label>
    <input type="password" class="form-control" name="password" id=""  placeholder="enter password"> 
    @if($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
    @endif
</div>
<button type="submit" name="submit" class="btn btn-success">submit</button>
</form>
</div>

  </body>
</html>