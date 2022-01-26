<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Тестовый php"; ?></title>
</head>
<body>
    <!-- тег и отступ -->
    <?php
    /**
 * Функция для вывода объектов в читаемом виде + вывод ошибок
 * @param $code
 * @param string $debug_method
 * @return bool
 */
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
// $array = ['1', 'ewtwt'];
// ddd($array, 'export');
    ?>

    <br>
    <?php
        echo "Главная страница <br>"; // тайтл даты и времени
        include 'second.php';
        ?>
        <?php
        echo date(DATE_RSS); # текущая дата
    ?>
    <br>
    <!-- пример рандома -->
    <?php
        if(mt_rand(0,1)){
            ?>
            <div style="color: blue">Синий текст</div>
            <?php
        } else {
            ?>
            <div style="color: red">Красный текст</div>
            <?php
        }
    ?>
    <?php
        $test = $num = $a = 6;
        echo $test-1;
        echo $num;
        echo $a-2;
    ?>
    <br>
    <?php
        $let = 5;
        echo "hello hello! {$let}5";

    ?>
    <br>
    <!-- проверка на заданную переменную -->
    <?php
        $user = Andrey;
        if(isset($user))
            echo "Переменная есть";
        else
            echo "Переменной нет";
    ?>
    <br>
    <!-- Проверка на пустую строку -->
    <?php
        $str = "";
        if(empty($str))
            echo "Пустая строка";
        else
            echo "Строка не пустая";
    ?>
    <br>
    <?php
        echo gettype($user);
    ?>
    <br>
    <!-- Проверка на число -->
    <?php
        if(is_int(1.25))
            echo "число";
        else
            echo "не число";
    ?>
    <br>
    <?php
        $str = '45.2';
        $number = $str - 12;
        echo $number;
    ?>
    <br>
    <?php
        $float = 4.3;
        $number = (int)$float;
        echo $number;
    ?>
    <br>
<!-- проверить типы через foreach -->
    <?php
        $tests = array(
            '42',
            1245,
            021345,
            "not num",
            array(),
            null,
            2.2
        );

        foreach ($tests as $element) {
            if (is_numeric($element)) {
                echo var_export($element, true) . " - число", PHP_EOL . "<br>";
            } else {
                echo var_export($element, true) . " - Не число", PHP_EOL . "<br>";
            }
        }
    ?>
<!-- ООП, класс и объект -->
    <?php
        require 'point.php';
        // $point1 = new Point;
        // $point1->x = 13;
        // $point1->y = 2;
        // echo $point1->x;

        // $point2 = new Point;
        // $point2->x = 125;
        // $point2->y = 25;
        // echo $point2->x;

        // unset($point2);
        // echo $point2->x;
        ?>
        <br>
<!-- переназначение переменных -->
        <?php
        // $first = new Point;
        // $first->x=3;
        // $first->y=3;

        // $second = $first;
        // $second->x=5;
        // $second->y=5;

        // echo "x: {$first->x}, y: {$first->y}";
        // echo sqrt(16);
// Формула вычисления квадратного корня по двум точкам
        $p1 = new Point;
        $p1->x=3;
        $p1->y=10;

        $p2 = new Point;
        $p2->x=10;
        $p2->y=34;

        $distance = sqrt((pow(($p2->x-$p1->x),2)+pow(($p2->y-$p1->y),2)));

        echo $distance;
    ?>
    <br>
<!-- константы -->
    <?php
        if(define('NUMBER', 1)) {
            echo 'Константа NUMBER создана и равна 1';
        }
        ?>
        <br>
        <?php
        if(defined('NUMBER')) {
            echo 'Константа NUMBER уже определена';
        }
    ?>
    <br>
    <?php
        echo constant('NUMBER');
    ?>
    <br>

    <?php
        $num = mt_rand(1, 10);
        $name = "VALUE($num)";
        define($name, $num);
        echo constant($name);
    ?>
    <br>
    <?php
        echo 'Имя файла' . __FILE__ . '<br>';
        echo 'Путь к файлу' . __DIR__ . '<br>';
        require_once __DIR__ . '/../lesson1/point.php';
    ?>

    <br>
    <?php
        include '../lesson15/index.php';
    ?>
    <br>
    <!-- Арифметические операторы -->
    <?php
        include '../lesson16/index.php';
    ?>
    <br>
    <?php
        include '../lesson17/index.php';
    ?>
     <br>
      <!-- Поразрядные операторы -->
    <?php
        include '../lesson18/index.php';
    ?>
     <br>
     <!-- Сравнение -->
    <?php
        include '../lesson19/index.php';
    ?>
    <br>
    <!-- условный оператор if else -->
    <?php
        include '../lesson20/index.php';
    ?>
    <br>
    <!-- Логические операторы -->
    <?php
        // include '../lesson21/index.php';
    ?>
    <br>
    <!-- Тернарные операторы -->
    <?php
        // include '../lesson22/index.php';
    ?>
    <br>
    <!-- Switch Case -->
    <?php
        include '../lesson23/index.php';
    ?>
    <br>
    <!-- Чтение из файла -->
    <?php
        // include '../lesson24/index.php';
    ?>

    <br>
    <!-- Цикл While -->
    <?php
        // include '../lesson25/index.php';
    ?>
    <br>
    <!-- Цикл Do While -->
    <?php
        include '../lesson26/index.php';
    ?>
    <br>
    <!-- Цикл For -->
    <?php
        include '../lesson27/index.php';
    ?>
    <br>
    <!-- Массивы -->
    <?php
        include '../lesson28/index.php';
    ?>
    <br>
    <!-- :List -->
    <?php
        include '../lesson32/index.php';
    ?>
     <br>
    <!-- обход массива for forEach -->
    <?php
        include '../lesson33/index.php';
    ?>

    <!-- Задачи по массивам -->

    <br>
    <?php
        include '../lesson36/index.php';
    ?>

    <!-- Функции -->

    <br>
    <?php
        include '../lesson37/index.php';
    ?>

    <!-- Рекурсия -->

    <br>
    <?php
        include '../lesson40/index.php';
    ?>

    <!-- Замыкания -->

    <br>
    <?php
        include '../lesson41/index.php';
    ?>

    <!-- Строки -->

    <br>
    <?php
        include '../lesson42/index.php';
    ?>

    <!-- Форма -->

    <br>
    <?php
        include '../lesson44/index.php';
    ?>

    <!-- JSON -->

    <br>
    <?php
        include '../lesson46/index.php';
    ?>

    <!-- метод GET -->

    <br>
    <?php
        include '../lesson47/index.php';
    ?>

 



</body>
</html>
