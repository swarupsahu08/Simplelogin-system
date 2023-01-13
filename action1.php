<?php

//connection with mysql server
include 'dbcon.php';
$email=$_POST['email'];
$pass=$_POST['pass'];

//script to enter the data into database
$sql="insert into register values('$email','$pass')";
$ex=mysqli_query($con,$sql);
if ($ex) {
    echo 'You have been registered successfully ,now you can'.'<a href="register.html">Login</a>';
}
else{
    echo mysqli_error($con);
}