<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Transparent form</title>
</head>
 
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">SIGN UP</button>
        <button class="loginBtn">LOG IN</button>
      </div>
      <form class="signUp" action="submitted.php" method="post">
        <div class="formGroup">
          <input type="text" placeholder="User Name" name="username" autocomplete="off" class="form-control">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="password" id="confirmPassword" placeholder="Confirm Password" required autocomplete="off">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="button" value="submit" class="btn2">REGISTER</button>
        </div>
 
      </form>
      <?php
        if(isset($_POST['submit'])){
          echo "Post submitted";
        }
      ?>
      
        
      <!-- ---- Login Form --------
      <form class="login" action="" method="get">
        
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required autocomplete="off">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required autocomplete="off">
         
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">Keep me signed in on this device</span>
        </div>
        <div class="formGroup">
          <button type="button" value="submit" class="btn2">REGISTER</button>
        </div>
 
      </form> -->
 
    </div>
  </div>
 
  <script src="jQuery.js"></script>
</body>
 
</html>
