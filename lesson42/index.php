<!-- Строки -->

<?php
    // $str = "Hello!";
    // ddd("\u{0410}");
    // ddd(strlen($str));
    // for($i=0; $i < strlen($str); $i++) {
    //     ddd($str[$i] . "<br>");
    // }
    ddd(chr(36));
    echo ord("$");
    // $date = '01.10.1993';
    // ddd('день ' . substr($date, 0, 2) . '<br>');
    // ddd('месяц ' . substr($date, 3, 2) . '<br>');
    // ddd('год ' . substr($date, 6) . '<br>');
    $date = "PHP - интерпретиуемый язык";
    ddd(substr($date, strpos($date, 'интер')));
?>

<!-- Подстроки -->

<?php
    $str = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
    echo $str;
    echo '<br>';
    $str = str_replace('[b]', '<b>', $str);
    $str = str_replace('[/b]', '</b>', $str);
    // удалить
    // $str = str_replace('[b]', '', $str);
    // $str = str_replace('[/b]', '', $str);
    echo $str;

?>

<!-- Для html -->

<?php
    $text = "text\nhello\nphp";
    ddd($text);
    echo $text;
    // перенос строки
    ddd(nl2br($text));
?>
