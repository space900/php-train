<!-- Задачи по массивам -->

<!-- случайный элемент -->
<br>
<?php
    $arr1 = ['red', 'yellow', 'green', 'blue', 'gray'];
    echo $arr1[rand(0, count($arr1)-1)];
?>

<!-- случайное кол-во и значение -->
<br>
<?php
    $length = rand(5,10);
    $arr2 = [];
    for($i=0; $i<$length; $i++) {
        $arr2[$i] = rand(0, 100);
    }
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
    // echo $arr1[rand(0, count($arr1)-1)];
?>

<!-- Сортировка -->
<br>
<?php
    $length = rand(5,10);
    $arr2 = [];
    for($i=0; $i<$length; $i++) {
        $arr2[$i] = rand(0, 100);
    }
    sort($arr2);
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
    // echo $arr1[rand(0, count($arr1)-1)];
?>

<!-- создание массива из строк -->

<br>
<?php
    $arr3 = file(__DIR__ . '/text.txt');
    ddd($arr3);

    // echo '<pre>';
    // print_r($arr3);
    // echo '</pre>';
    // ddd(__DIR__);
    // $filename = '../letext.txt';

    // if (file_exists($filename)) {
    //     echo "Файл $filename существует";
    // } else {
    //     echo "Файл $filename не существует";
    // }
?>
