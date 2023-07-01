<?php
    // Create a connection to the database
$connection = mysqli_connect('localhost', 'root','', 'tour_database1');

// Check if the connection was successful
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $name = ($_POST["name"]);
    $email= ($_POST["email"]);
    $message= ($_POST["message"]);
    $subject= ($_POST["subject"]);
    


    // Insert the data into the database
  $request = "INSERT INTO  tour (name , email , message , subject) VALUES ('$name', '$email', '$message', '$subject')";
  
  mysqli_query($connection, $request);

  if($request){
    
  }else{
    header('location:mail.php');
  }

}else
echo 'wrong'



?>

   