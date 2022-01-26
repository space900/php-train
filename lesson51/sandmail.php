<?php
    // // if($_POST['captcha'] != 56) {
    // //     header('location: index.php');
    // //     exit;
    // // }
    // function ddd($code, string $debug_method = 'print'): bool {

    //     ini_set('error_reporting', E_ALL);
    //     ini_set('display_errors', 1);
    //     ini_set('display_startup_errors', 1);
    //     echo "<pre style='background: black; color: green; padding: 25px;'>";
    //     switch ($debug_method) {
    //         case 'print' :
    //             print_r($code);
    //             break;
    //         case 'dump' :
    //             var_dump($code);
    //             break;
    //         case 'export' :
    //             var_export($code);
    //             break;
    //     }
    //     echo '</pre>';
    //     return true;
    // }
    // ddd($_POST)

    $subject = $_POST['subject'];
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    $email = $_POST['email'];

    if($subject == 1) {
        $subject = 'Вопрос по теме';
    } elseif($subject == 2) {
        $subject = 'Вопрос не по теме';
    } else {
        $subject = 'Вопрос по теме';
    }

    $response = mail($email, $subject, $message);
    ddd($response);
    if($response) {
        $response = 'Письмо отправлено';
    } else {
        $response = 'Письмо не отправлено';
    }


    $output = ['subject' => $subject, 'message' => $message, 'email' => $email, 'response' => $response];
    exit(json_encode($output));
?>

