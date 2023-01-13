<?php
$con= mysqli_connect('localhost','root','','swarup');
if($con)
echo "Connected";
else
echo mysqli_connect_error();
?>