<?php
include'connect.php';
# get the id from the url
if (isset($_GET['userID'])) {
    $id = $_GET['userID'];

    # sql 
    $sql = "delete from `user` where id=$id";
    #checking connection and deleting data
    $result = mysqli_query($con,$sql);
    if ($result) {
        # if done then redirecting to the list
        header('location:user_list.php');
    }
    else {
        die(mysqli_error($con));
    }
}
?>