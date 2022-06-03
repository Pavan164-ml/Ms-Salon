<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number = $_POSR['number'];
$to = "pavanram2000@gmail.com";
$subject = "Salon Mail";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile Number =" . $number;

$headers = "From: noreply@abc.com" . "\r\n" .
"CC: pavankumar@science.christuniversity.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>