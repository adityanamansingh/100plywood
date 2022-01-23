<?php

    //mail service start
    include("class.phpmailer.php"); //Include PHP mailer
    include("class.smtp.php"); // Include SMTP Service

    $mail = new PHPMailer(); //PHP mailer Object Created

    $mail->IsSMTP(); // set mailer to use SMTP

    $mail->Mailer = "smtp";
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // set the port to use
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "	100plywood@gmail.com";
    $mail->Password = "wjlsslsayohizpkm";
    $mail->SMTPDebug =3;
    $mail->SMTPSecure = 'tls';
    $from = "100plywood@gmail.com";
    $password = "wjlsslsayohizpkm";
    $pass=$password;

