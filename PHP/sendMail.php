<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  $name = $_REQUEST['name'] ;

  mail( "info@lmcincorporated.com", "Feedback Form Results",
    $message, "Name: $name","Email: $email" );
  header( "Location: http://www.lmcincorporated.com/LMC/thankyou.php" );
?>
