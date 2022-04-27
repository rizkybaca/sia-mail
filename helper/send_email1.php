<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include library phpmailer
include('../../helper/phpmailer/Exception.php');
include('../../helper/phpmailer/PHPMailer.php');
include('../../helper/phpmailer/SMTP.php');

$email_pengirim = 'bammm.dev@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'sia-sia?'; // Isikan dengan nama pengirim
$email_penerima = $email; // Ambil email penerima dari inputan form
$subjek = 'Email dan Password sia-sia?'; // Ambil subjek dari inputan form
$pesan = 'halo, gunakan email dan password ini untuk login di sia-sia? Email='.$email.' Password='.$password.''; // Ambil pesan dari inputan form

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Username = $email_pengirim; // Email Pengirim
$mail->Password = 'Aprl031999'; // Isikan dengan Password email pengirim
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($email_penerima, '');
$mail->isHTML(true); // Aktifkan jika isi emailnya berupa html

// Load file content.php
ob_start();
include "content_email.php";
$content = ob_get_contents(); // Ambil isi file content.php dan masukan ke variabel $content
ob_end_clean();
$mail->Subject = $subjek;
$mail->Body = $content;
$send = $mail->send();

?>