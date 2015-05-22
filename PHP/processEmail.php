<?php

//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];
$name=trim($name);
$email=trim($email);
$subject=StripSlashes($subject);
$message=StripSlashes($message);
$toaddress='info@lmcincorporated.com';



mail($toaddress,$subject,"$name wrote: \n\n$name's email address is: $email\n\n$name's message is: $message","From: $name <$email>");
//clear the variables
$name='';
$email='';
$message='';
$subject='';


header( "Location: ../thanks.php" );	
?>