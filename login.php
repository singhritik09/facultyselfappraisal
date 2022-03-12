<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="nav">
        <a href="https://www.bmsce.ac.in/">BMS</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>

    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form method="post" action="login_verify.php">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone"name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="pass" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
           
            <a href="form.html"><input type="submit" value="Login"></a>
            
          </div>
          <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        </form>
      </div>
    </div>

    <div>
    <?php

    if(isset($_GET['reg']))
    {
      if($_GET['reg']==1){
        echo "<script>alert('Registration Successful! Please Login:');</script>";
      }
  }

    ?>

    </div>

  </body>
</html>