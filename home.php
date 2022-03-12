<?php

session_start();

if(isset($_SESSION['userId'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="logo.css">
</head>
<body>
    <div class="nav">
        <a href="https://www.bmsce.ac.in/">BMSCE Official</a>
        <a href="form.html">Appraisal Form</a>
        <a href="contact.php">News</a>
        <a href="logout.php">Logout</a>
    </div>
    <div style="background-image: url('background1.jpg');">
        
    </div>
    <div class="main-box">
        <h1>BMS College of Engineering</h1>
        <p>Autonomous college affiliated to VTU</p>
        <button><a href=""></a>Apply Now</button>
    </div>

    <div class="container">
        <h2>B.M.S College of Engineering</h2>
        <div class="row">
           <div class="column">
           <img src="imag1.jpeg" width ="100%">
           </div>
           <div class="column">
              <img src="imag2.jpeg" width ="100%">
           </div>
           <div class="column">
           <img src="imag3.jpeg" width ="100%">
           </div>
        </div>
     </div>
  </body>
  </html> 
</body>
</html>

<?php
}
else{
    echo "<script>You need to login first/script>";
    header("location:login.php");
}


?>