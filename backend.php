<?php
  if(isset($_POST['action'])){
      $name = $_POST['name'];
      $email= $_POST['email'];
      $options = $_POST['options'];
      $location = $_POST['location'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      $optionsVal="";
      switch ($options) {
        case '1':
            $optionsVal = "Inquiry(Business)" ;
            break;
        case '2':
            $optionsVal = "Talk about project" ;
            break;
        case '3':
            $optionsVal = "Just Chat" ;
            break;
       }
      /*echo "name is ".$name."<br>";
      echo "name is ".$email."<br>";
      echo "name is ".$optionsVal."<br>";
      echo "name is ".$location."<br>";
      echo "name is ".$phone."<br>";
      echo "name is ".$message."<br>";*/
      $to="arkoprabhachatterjee@gmail.com";
      $subject = "New client message.";
      $body = "Client's name is ".$name."\n\n";
      $body .= "Client's Intention: ".$optionsVal."\n\n";
      $body .= "Client's Location: ".$location."\n\n";
      $body .= "Client's Phone: ".$phone."\n\n";
      $body .= "Message: \n".$message;
      
      $from = "From: ".$email; 
    if (mail($to, $subject, $body, $from)) {
        echo "<p>Email successfully sent!</p>";
        echo "<a href='index.html'>Return to homepage</a>";
    } else {
        echo "<p>Email delivery failed…</p>";
        echo "<a href='getquote.php'>Return to previous page</a>";
     }
  }

?>