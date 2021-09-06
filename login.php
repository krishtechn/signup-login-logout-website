<?php 

 include 'dbconnect.php';


 if($_SERVER['REQUEST_METHOD']=='POST'){

      $username = $_POST['username'];
      $password = $_POST['password'];

//      now used sql query to select all the column 

//    if userenter username and password are match then login 

  $sql = "SELECT * FROM testtable where name = '$username' and password = '$password'";

  $result = mysqli_query($connect,$sql);

  $num = mysqli_num_rows($result);


  if($num == 1){
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> you are login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

 session_start();
 $_SESSION['username'] = $username;
header('location:home.php');

  }else{
       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>error!</strong> Invalid username and password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

 }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <h1 class="text-center my-3">Login to our website</h1>

    <div class="container">
   <form action="" class="col-md-6" method="Post">
     
    <div class="mb-3">
  <label for="username" class="form-label">Username</label>
  <input type="text" required class="form-control" id="username" name="username" placeholder="Enter your name">
</div>
    <div class="mb-3">
  <label for="password" class="form-label">password</label>
  <input type="password" required class="form-control" id="password" name="password" placeholder="Enter your password">
</div>
  <button type="submit" class="btn btn-primary">Login</button>

  </form>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>