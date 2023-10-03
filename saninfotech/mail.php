<?php
use PHPMailer\PHPMailer\PHPMailer;




if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$mail = new PHPMailer(true);
try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rakeshdigitalmarketing805@gmail.com';                     //SMTP username
    $mail->Password   = 'xugouruchjegscff';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@saninfotech.in', 'San Infotech');
    $mail->addAddress('info@saninfotech.in');     //Add a recipient
    $mail->addReplyTo($email);
  

    //Attachments
   
$msg = "Name:- $name <br> Mobile:- $phone <br>Email:- $email <br> Address:- $address  <br> Message:- $message" ;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Website Contact Enquiry';
    $mail->Body    = $msg;
   

    $mail->send();
    echo "<script>alert('Your Contact Form Submited. We are respose soon. ')</script>";
    echo "<script>location.replace('contact.php')</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>