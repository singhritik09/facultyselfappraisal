<?php

$con=mysqli_connect("localhost","root","","login");

$email=$_POST['email'];
$pass=$_POST['pass'];

$sql="SELECT * FROM users WHERE email='$email' and password='$pass'";

$query=mysqli_query($con,$sql);

if($query){
    if($row=mysqli_fetch_array($query)){
        #echo $row['name'] . $row['password'];
        
        session_start();

        $_SESSION['userId']=$row['id'];
        $_SESSION['userName']=$row['name'];
        header("location:home.php");

    }
    else{
        echo "User Not Found!! Register First";
    }


}


?>