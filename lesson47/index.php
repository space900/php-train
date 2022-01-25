<!-- метод GET и POST -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>
</head>
<body>
    <form action="checkbox.php" method="POST">
        <!-- <input type="text" name="first"><br>
        <input type="text" name="second"><br> -->
        <input type="checkbox" value="1" name="go" checked>go<br>
        <input type="checkbox" value="2" name="js">js<br>
        <input type="checkbox" value="3" name="css">css<br>
        <input type="checkbox" value="4" name="html" checked>html<br>
        <input type="radio" name="mark" value="3">5<br>
        <input type="submit" value="Отправить">
    </form>
    <form action="script.php" method="POST" enctype="multipart/form-data">
        Форма для загрузки файлов<br>
        <input type="file" name="filename" size="">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
<?php
    // echo $_GET['id'];
    // echo "<a href='text.php?phrase=" . urldecode("Привет, мир!") . "'>Ссылка</a>";
    // echo '' . '<br>';
    // $url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
    // ddd(print_r(parse_url($url)));
?>

<!-- метод POST -->

<?php
    // if(empty($_GET['first']) && empty($_GET['second'])) {
    //     exit('Текстовые поля не заполнены');
    // } else {
    //     echo '</pre>';
    //     print_r($_GET);
    //     echo '</pre>';
    // }
    // ddd(print_r($_POST));
?>

