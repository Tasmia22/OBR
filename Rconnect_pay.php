<?php
$Name= filter_input(INPUT_POST,'Name');
$Email= filter_input(INPUT_POST,'Email');
$Credit= filter_input(INPUT_POST,'Credit');
$Quantity=filter_input(INPUT_POST,'Quantity');
if(!empty($Name)){
  if(!empty($Email)){
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
       $sql="INSERT INTO payment(Name,Email,Credit,Quantity) values ('$Name','$Email','$Credit','$Quantity')" ;
          if($conn->query($sql)){
              echo "Payment is done";
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