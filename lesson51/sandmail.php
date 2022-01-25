<?php
    // if($_POST['captcha'] != 56) {
    //     header('location: index.php');
    //     exit;
    // }

    if($_POST['subject'] == 1) {
        $subject = 'Вопрос по теме';
    } elseif($_POST['subject'] == 2) {
        $subject = 'Вопрос не по теме';
    } else {
        $subject = 'Вопрос по теме';
    }

    $to = "testaccforphp@gmail.com";
    $from = trim($_POST['email']);

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    // $headers = "From: $from" . "\r\n" .
    // "Reply-To: $from" . "\r\n" .
    // "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo 'Письмо отправлено';
    } else {
        echo 'Письмо не отправлено';
    }
?>
