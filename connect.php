<?php
# create connection
$con= new mysqli('localhost','root','Avi@2022','phpcrud');
if (!$con) {
    echo die(mysqli_error($con));
}
