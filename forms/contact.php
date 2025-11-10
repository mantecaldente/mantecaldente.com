<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['csending'])){

  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $date = (new DateTime('NOW'))->format("d/m/y h:i:s");

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Mailer = "smtp";

  $mail->SMTPDebug  = 2;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "ssl";
  $mail->Port       = 465;
  $mail->Host       = "c2440345.ferozo.com";
  $mail->Username = "noreply@mantecaldente.com";
  $mail->Password = "oQnEUqt84@";

  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->addAddress('mantecaldente@gmail.com', "Manteca al dente");
  $mail->setFrom("noreply@mantecaldente.com", "Manteca al dente");
  $mail->Subject = "🐷 Nuevo mensaje en mantecaldente.com";
  $content = "<b>Fecha</b>: ".$date."<br><b>Nombre</b>: ".$name."<br><b>Email</b>: ".$email."<br><b>Mensaje</b>: ".$message;

  $mail->MsgHTML($content); 
  $mail->AltBody = "Fecha: ".$date."\nNombre: ".$name."\nEmail: ".$email."\nMensaje: ".$message;

  $mail->Send();
  
} 
else {

  die("You dont have permission to access this page!");

}


?>