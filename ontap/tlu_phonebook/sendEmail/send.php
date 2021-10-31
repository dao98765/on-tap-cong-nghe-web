<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

function sendEmail ($recipient, $code){
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
        $mail->isSMTP();// gửi mail SMTP
        $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
        $mail->SMTPAuth = true;// Enable SMTP authentication
        $mail->Username = 'daont1810@gmail.com';// SMTP username
        $mail->Password = 'dao181001'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';
        //Recipients
        // Tên hiển thị trên Email
        $mail->setFrom('daont1810@gmail.com', 'Đào Tân');
        $mail->addReplyTo('daont1810@gmail.com', 'Đào Tân');

        // Địa chỉ người nhận
        $mail->addAddress($recipient); // Add a recipient

        // Attachments
        // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
        // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf', $data[11].'_2.pdf'); // Optional name

        // Content
        $mail->isHTML(true);   // Set email format to HTML
        $tieude = '[Đăng ký tài khoản]';
        $mail->Subject = $tieude;
        // Mail body content
        $bodyContent = 'Nhấp vào đây để kích hoạt: <a href="http://localhost/tlu_phonebook/activation.php?email='.$recipient.'&code='.$code.'">Nhấp vào đây</a>';
        $mail->Body = $bodyContent;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if($mail->send()){
            echo 'Thư đã được gửi đi';
        }else{
            echo 'Lỗi. Thư chưa gửi được';
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
    ?>
