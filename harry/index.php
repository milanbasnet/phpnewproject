<?php 
    // require_once './getPost.php';
    // require_once './database.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body>
  <?php
    // require_once "./database.php";
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<?php 
  if ($_SERVER['REQUEST_METHOD']=='POST') {
      $name=$_POST['name'];
      $phone=$_POST['phone'];
      $email=$_POST['email'];
      $pass=$_POST['password'];  //only pass variable is used because password is already in db connection
      //connecting to the database
      $servername="localhost";
      $username= "root";
      $password="root";
      $databasename="harry";

      // * if database is to create from here above databasename is not mentioned and created database using query from here


      $con=mysqli_connect($servername, $username, $password, $databasename);
      if (!$con) {
          die("failed to connect". mysqli_connect_error());
      } else {
          // echo "connection successful";
          $sql= "INSERT INTO `users`(name, phone, email, password) VALUES('$name','$phone', '$email','$pass')";
          $result= mysqli_query($con, $sql);

          if ($result) {
              echo "data inserted";
          } else {
              echo "not inserted".mysqli_error($con);
          }
      }
  }
?>

<form method="post" action="/index.php">
<div class="form-group">
    <label for="name">name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="phone">phone</label>
    <input type="phone" name="phone" class="form-control" id="phone" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>