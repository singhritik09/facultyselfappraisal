<?php

$con=mysqli_connect("localhost","root","","faculty_report");

$name=$_POST['name'];
$email=$_POST['email'];
$dept=$_POST['dept'];
$eval=$_POST['eval'];  //
$classes=$_POST['classes']; //NUM
$innov=$_POST['innov'];
$research=$_POST['research'];
$train=$_POST['train'];
$teaching=$_POST['teaching']; //NUM
$projects=$_POST['projects'];


$sql="INSERT INTO details(id,name,email,dept,eval,classes,innov,research,train,teaching,projects) VALUES (Null,
'$name','$email','$dept','$eval','$classes','$innov','$research','$train','$teaching','$projects')";

$query=mysqli_query($con,$sql);

if($query)
{
    echo "Saved form. Thank You!!";
    header("location:login.php?reg=1",);
}
else{
    echo "Something went wrong!!";
}


?>