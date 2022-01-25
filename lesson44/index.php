<form action="handler.php" method="post">
    Сообщение: <br>
    <textarea name="msg" cols="50" rows="5"></textarea><br>
    <input type="submit" value="Добавить">
</form>

<?php
    ddd(printf("апапап - %d", 12));
    $str = 'Имя, Фамилия, Номер';
    // разделитель строки (explode('-', $str, 2));
    // обратная, из массива в строку - implode
    ddd(explode(',', $str, 2));

?>
