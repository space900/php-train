<?php
    // $filename = '../vendor/PHPMailer-master/src/Exception.php';
    // if (file_exists($filename)) {
    //         echo "Файл $filename существует";
    //     } else {
    //         echo "Файл $filename не существует";
    //     }
    function ddd($code, string $debug_method = 'print'): bool {

        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        echo "<pre style='background: black; color: green; padding: 25px;'>";
        switch ($debug_method) {
            case 'print' :
                print_r($code);
                break;
            case 'dump' :
                var_dump($code);
                break;
            case 'export' :
                var_export($code);
                break;
        }
        echo '</pre>';
        return true;
    }
?>

<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/PHPMailer/src/Exception.php';
    require '../vendor/PHPMailer/src/PHPMailer.php';
    require '../vendor/PHPMailer/src/SMTP.php';

    $filename = '../vendor/PHPMailer/src/PHPMailer.php';
    if (file_exists($filename)) {
            echo "Файл $filename существует";
        } else {
            echo "Файл $filename не существует";
        }

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // ddd($mail->SMTPDebug);
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
        // ddd($mail->SMTPDebug);
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'and@pro-kontur.ru';                     //SMTP username
        $mail->Password   = 'Qel2-ir7u844309';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('and@pro-kontur.ru', 'Mailer');
        $mail->addAddress('testaccforphp@gmail.com', 'Joe User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('testaccforphp@gmail.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
