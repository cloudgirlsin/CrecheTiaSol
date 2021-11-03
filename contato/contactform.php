<?php

if (isset($_POST['submit'])) {
     
     $name = $_POST['name'];
     $phone = $_POST['tel'];
     $mailFrom = $_POST['email']; 
     $message = $_POST['message'];
     $subject= $_POST['subject'];

     $mailTo="crecheescolatiasol97@gmail.com";
     $headers="From: ".$mailFrom;
     $subject="".$subject;
     $txt="Nome:" .$name. ".\nTel:" .$phone. ".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: index.html?mailsend");

}
?>
