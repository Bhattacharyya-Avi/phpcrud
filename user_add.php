<?php
include 'connect.php';
#inserting data to database
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $address=$_POST['address'];

  #mysql query
  $sql = "insert into `user`(name,email,password,address)
  values('$name','$email','$password','$address')";
  # check the DB connection and run the query
  $result= mysqli_query($con,$sql);
  #check that data has inserted or not
  if ($result) {
    // echo "Data created successfully!";
    # redirect to the page
    header('location:user_list.php');
  }else {
    die(mysqli_error($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>User add</title>
  </head>
  <body>

  <div class="continer">
    <div class="col-lg-2 my-2">
      <button class="btn btn-primary">
        <a style="color: white;" href="user_list.php">user list</a>
      </button>
    </div>
    <div class="col-lg-8 my-5">
      <form method="POST">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Address</label>
          <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="col-lg-2"></div>
  </div>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
