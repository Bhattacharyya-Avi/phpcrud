<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>user list</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a style="color: white;" href="user_add.php">Add user</a>    
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
      <?php
      #taking data from db
        $sql = "select * from `user`";
        #checking the connection and data from db
        $result = mysqli_query($con,$sql);
        if ($result) {
            while ($row= mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $address = $row['address'];
                echo' 
                <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                </tr>';
            }
        }
      ?>
  </tbody>
</table>
    </div>
</body>
</html>