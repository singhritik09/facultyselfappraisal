<?php

$con=mysqli_connect("localhost","root","","login");

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];

//echo $name. $email .$pass;

$sql="INSERT INTO users(id,name,email,password) VALUES (NULL,'$name','$email','$pass')";

$query=mysqli_query($con,$sql);

if($query){
    echo "Registration Success";
    header("location:login.php?reg=1",);
}
else{
    echo "something went wrong";
}

?>