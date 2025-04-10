<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contoh@gmail.com';      // data form akan terkirim ke email ini
    $mail->Password   = 'icikiwir';          // Password SMTP Email
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('contoh@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = "
        <h3>Pesan dari Form Contact Us</h3>
        <p><strong>Nama:</strong> {$_POST['name']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Pesan:</strong><br>{$_POST['message']}</p>
    ";

    $mail->send();

    // kirim response json sukses
    http_response_code(200);
    echo json_encode(['status' => 'success']);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
}
