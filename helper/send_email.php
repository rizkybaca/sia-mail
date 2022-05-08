<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    // $phpmailer = new PHPMailer();
    $mail->isSMTP();

    // $mail->Host = 'smtp.mailtrap.io';
    // $mail->SMTPAuth = true;
    // $mail->Port = 2525;
    // $mail->Username = '4e91322af77057';
    // $mail->Password = '3635bdb35383da';

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls"; 
    $mail->Port = 587;
    $mail->Username = 'bammm.dev@gmail.com';
    $mail->Password = 'Aprl031999';

    $email_pengirim = 'bammm.dev@gmail.com'; // Isikan dengan email pengirim
    $nama_pengirim = 'sia-sia?'; // Isikan dengan nama pengirim
    $email_penerima = $email; // Ambil email penerima dari inputan form
    $subjek = 'Email dan Password sia-sia?'; // Ambil subjek dari inputan form
    $pesan = 'halo, gunakan email dan password ini untuk login di sia-sia? </br>Email=' . $email . ' </br>Password=' . $password . ''; // Ambil pesan dari inputan form

    //Recipients
    $mail->setFrom($email_pengirim, $nama_pengirim);
    // $mail->addAddress($email_penerima, 'User');     //Add a recipient
    $mail->addAddress($email_penerima);               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML

    // Load file content.php
    ob_start();
    include "content_email.php";
    $content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
    ob_end_clean();

    $mail->Subject = $subjek;
    $mail->Body    = $content;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
