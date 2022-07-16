<?php
$name = $_POST["name"];
$lastname =$_POST['lastname'];
$visitor_emaail = $_POST['email'];
$message = $_POST['message'];


$to ="messanericekoue@gmail.com";
$subject = "New Form Submission";
$txt = "name = ". $name . "\r\n Email = "
    .$email . "\r\n Message =" . $message;
$headers = "From: noreply@github.io" . "\r\n" .
($email != NULL) ( 
    mail($to, $subject, $txt, $headers);
    )
  header("location:index.html");
?>