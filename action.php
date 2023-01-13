<?php

//connection with mysql server
include 'dbcon.php';

//Sql code to create table

// $sql="Create table register(email varchar(60) primary key,pass varchar(11))";
// $ex=mysqli_query($con,$sql);
// if($ex)
// {
//     echo "Table Created";
// }
// else {
//     echo mysqli_error($con);
// }

//retrieval of data entered
$email=$_POST['email'];
$pass=$_POST['pass'];

//Checking of the data inside the database
$sql="select * from register where email='$email' and pass='$pass' ";
$ex=mysqli_query($con,$sql);
$row=mysqli_fetch_array($ex);
$count=mysqli_num_rows($ex);

//Confirmation of login
if($count == 1)
{
    echo "Login Successful";
}
else {
    echo "Login Failed";
}

?>