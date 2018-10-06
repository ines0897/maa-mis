<?php
    require("vendor/phpmailer/src/PHPMailer.php");
    $mail = new PHPMailer();

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "eminavarra27@gmail.com"; // your GMail user name
    $mail->Password = "specialforce09"; 
    $mail->AddAddress("gabspetnaz24@gmail.com"); // recipients email
    $mail->FromName = "gabzkie"; // readable name

    $mail->Subject = "Nemals";
    $mail->Body    = "Here is the message you want to send to your friend."; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
    ?>