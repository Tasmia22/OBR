<?php
session_start();
include("db.php");
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
        <h1>ADMIN PANEL</h1>
              <form action="" method="post">
   <label>Name :</label>
   <input id="name" name="username" placeholder="Admin Name" type="text">
   <label>Email :</label>
   <input id="email" name="email" placeholder="@gmail.com" type="text">                  
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value="Admin Login ">

   <span><?php echo $error; ?></span>
  </form>
        
        </div>
    
      <?php
    if(isset($_POST['submit']))
    {   
        $user_email = $_POST['admin_email'];
        $user_pass = $_POST['admin_name'];
        
        $sel_admin="select * from admins where admin_email='$admin_email' AND admin_pass='$user_pass'";
        $run_admin=mysqli_query($con,$sel_admin);
       $check_admin=mysqli_num_rows($run_admin);
        if($check_admin==1){
            $_SESSION['admin_email']=$user_email;
            echo "<script>window.open('Admin_login.php?logged_in','_self')</script>";
        }else
        {
            echo "<script>alert('Email or password incorrect')</script>";
            
        }
        
    }
    ?>
    </body>
</html>