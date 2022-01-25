<!-- Отправка письма на почту -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Письмо на почту</title>
</head>
<body>
    <form action="sandmail.php" method="POST">
        <select name="subject">
            <option disabled selected>Тема письма</option>
            <option value="1">Вопрос по теме</option>
            <option value="2">Вопрос не по теме</option>
        </select>
        <!-- <input type="number" name="capcha" placeholder="Введите ответ" maxlength="3" required> -->
        <input type="email" name="email" placeholder="Введите email" minlength="2" maxlength="50" required>
        <textarea name="message" placeholder="Введите сообщение" maxlength="150" reuqired></textarea>
        <input type="submit" value="Отправить письмо">
    </form>
</body>
</html>
