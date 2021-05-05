<?php
$username= filter_input(INPUT_POST,'username');
$password= filter_input(INPUT_POST,'password');
if(!empty($username)){
  if(!empty($password)){
    $host="localhost";
    $dbusername="root";
    $dbpassword= "";
    $dbname="company";
      
      //create connection
      $conn= new mysqli ($host,$dbusername,$dbpassword,$dbname);
      if(mysqli_connect_error())
      {
          die('Connect Error ('.mysql_connect_errno().')'.mysqli_connect_error());
      }
      else{
       $sql="INSERT INTO login(username,password) values ('$username','$password')" ;
          if($conn->query($sql)){
              echo "New record is entered succesfully";
          }
          else
          {
              echo "error :".$sql."<br>".$conn->error;
          }
          $conn->close();
      }
}
else
{
    echo "password should not be empty";
    die();    
}
  
}
else
{
    echo "Username should not be empty";
    die();    
}

?>