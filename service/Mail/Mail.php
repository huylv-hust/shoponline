<?php
include "class.phpmailer.php";
include "class.smtp.php";
class Mail
{
    function send_gmail($to_email, $to_name, $subject, $token)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // specify main and backup server
        $mail->Port = 465; // set the port to use
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username = 'levanhuy93@gmail.com'; // your SMTP username or your gmail username
        $mail->Password = '12101993@hlv'; // your SMTP password or your gmail password
        $mail->From = 'levanhuy93@gmail.com';
        $mail->FromName = 'Huy Le'; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to_email, $to_name);
        $mail->AddReplyTo('levanhuy93@gmail.com', 'Huy Le');
        //$mail->WordWrap = 50; // set word wrap
        //$mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        if (file_exists('E:/Xampp/htdocs/shoponline/service/Mail/mail.txt')) {
            $text = file_get_contents('E:/Xampp/htdocs/shoponline/service/Mail/mail.txt');
            $start = $replace = array();
            $start[] = '$name';
            $replace[] = $to_name;
            $start[] = '$mail';
            $replace[] = $to_email;
            $start[] = '$token';
            $replace[] = $token;
            $text = str_replace($start,$replace,$text);
            $mail->Body = $text; //HTML Body
        }
        return $mail->Send();
    }
}