<?php
$n=$_POST['username'];
$p=$_POST['password'];
$e=$_POST['email'];
$con=mysqli_connect("localhost","root","","recipe");
$sql="INSERT INTO sign_db (User_Name,User_Pass,User_Email) values('$n','$p','$e')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo"User details added successfully";
}
else{
    echo"User details not added";
}