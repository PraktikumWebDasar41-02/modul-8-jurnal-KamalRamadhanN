<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <h1>Register</h1>
      <div class="row">
        <div class="col-md-8">
          
<form method="POST" action="form.php">
  <div class="form-group">
    <label for="Username">Username</label>
    <input type="text" name="Username" class="form-control" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ulangi Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Ulangi Password">
  </div>
  <div class="form-group">
    <label for="Username">Email</label>
    <input type="text" name="Email" class="form-control" placeholder="example.@gmail.com">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
  $Username = $_POST["Username"];
  $Password = $_POST["Password"];
  $Email = $_POST["Email"];

  mysqli_query($koneksi,"INSERT INTO user VALUES ('$Username','$Password','$Email')");
}
?>