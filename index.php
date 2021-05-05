<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: Cart.php"); // Redirecting To Profile Page
}
?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
       <div class="login-box">
        <img src="book-img/avatar.png" class="avatar">
        <h1>Login Here</h1>
              <form action="" method="post">
   <label>User Name :</label>
   <input id="name" name="username" placeholder="username" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
                   <p>Not Registered?  <a href="regform.html">Sign Up</a>  </p>
   <span><?php echo $error; ?></span>
  </form>
        
        </div>
    </body>
</html>