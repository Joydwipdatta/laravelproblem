<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="login" method="post">
        @csrf
    <h1>LOGIN</h1><br><br>
      <input type="email" name="email" placeholder="enter email" ><br><br>
      <input type="password" name="password" placeholder="enter password"><br><br>
      <button type="submit" name="submit">Submit</button>
      </form>
  </body>
</html>