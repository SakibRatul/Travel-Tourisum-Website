<?php

// Create a connection to the database
$connection = mysqli_connect('localhost', 'root','', 'tour_database1');

// Check if the connection was successful
if($_SERVER["REQUEST_METHOD"] == "POST"){
  


  // Get the data from the form
  $visitor_name  = $_POST["visitor_name"];
  $visitor_email  = $_POST["visitor_email"];
  $visitor_phone = $_POST["visitor_phone"];
  $Tour_Date = $_POST["Tour_Date"];
  $Tour_finish_date = $_POST["Tour_finish_date"];
  $Tour_package = $_POST["Tour_package"];
  $Number_of_People = $_POST["Number_of_People"];
  $Comments = $_POST["Comments"];

  // Insert the data into the database
  $request = "INSERT INTO  tour (visitor_name , visitor_email , visitor_phone, Tour_Date, Tour_finish_date, Tour_package, Number_of_People, Comments) VALUES ('$visitor_name', '$visitor_email', '$visitor_phone', '$Tour_Date', '$Tour_finish_date', '$Tour_package', '$Number_of_People', '$Comments')";
  
  mysqli_query($connection, $request);

  if($request){
    header('location:congratulation.php');
  }else{
    header('location:demoform.html');
  }

}else
echo 'wrong'



?>
