<?php 

 include 'dbconnect.php';


 if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $userprofile = $_POST['userprofile'];

   echo $userprofile;

  // $pass1 = password_hash($password,PASSWORD_DEFAULT);
  // $pass2 = password_hash($cpassword,PASSWORD_DEFAULT);
 
  if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
    echo "Only letters and white space allowed";
  }

  // if(empty($username)){
  //   echo "username are required";
  // }
  // else if(empty($password)){
  //   echo "password are required";
  // }
  // else if(empty($cpassword)){
  //   echo "cpassword are required";
  // }
  // else if(empty($username)){
  //   echo "username are required";
  // }else{
  //   echo "Invalid";
  // }

  if($exist = true){
    echo "exist";
  }

  if($password == $cpassword || $exist = false){

    $sql = "INSERT INTO `testtable` (`id`, `name`, `password`, `cpassword`,`userprofile`, `date and time`) VALUES (NULL, '$username', '$password', '$cpassword', '$userprofile' , current_timestamp());";
    $result = mysqli_query($connect,$sql);

    if($result = true){
      echo "data is inserted";
      header('location:login.php');
    }else{
      echo "data is not inserted";
      header('location:signup.php');
    }
  

  }else{
    echo "password and cpassword does not match";
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

    <title>signup</title>
  </head>
  <body>
    <h1 class="text-center my-4">Signup to our website</h1>

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
    <div class="mb-3">
  <label for="cpassword" class="form-label">cpassword</label>
  <input type="cpassword" required class="form-control" id="cpassword" name="cpassword" placeholder="cEnter your password">
</div>

<input type="file" class="form-control" name="userprofile"><br><br><br>
  <button type="submit" class="btn btn-primary">Signup</button>

  </form>
</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>