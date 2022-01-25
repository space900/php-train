<!-- обход массива for forEach -->

<?php
    // $num = ['1', '2', '3', '4', 'werwer', 45, true];
    // for($s=0; $s<count($num); $s++) {
    //     echo "$num[$s] <br>";
    // }
    $num = [
        'auto' => 'Dodge',
        'plane' => 'mig29',
        'ship' => 'Black Pearl'
    ];

    foreach($num as $key => $value) {
        echo "$key : $value <br>";
    }

    $transport = [
        'Авто' => ['Audi', 'BMW', 'Reno', 'Ford', 'Kia'],
        'Корабли' => ['Эсминец', 'Фрегат', 'Авианосец']
    ];



    // foreach($transport as $key => $value) {
    //     echo "<b>$key</b><br>";
    //     foreach($value as $val) {
    //         echo "<li>$val</li>";
    //     }
    // }

    foreach($transport as $key => $value) {
        echo "<b>$key</b><br>";
        for($r=0; $r<count($value); $r++) {
            echo "<li>$value[$r]</li>";
        }
    }


?>

<!-- слияние массивов -->
<br>
<?php
    $first = [1=>'red', 2=>'blue'];
    $second = [2=>'yellow', 5=>'green'];
    // $con = $first + $second;
    // $con = array_merge($first, $second);
    // echo '<pre>';
    // print_r($con);
    // echo '</pre>';

    if($first == $second) {
        echo "Массивы равны<br>";
    } else {
        echo "Массивы не равны<br>";
    }

    // Проверка на существование массива

    $arr35 = [5=>1, 2, 3];
    if(is_array($arr35[6])) {
        echo 'Это массив';
    } else {
        echo 'Не массив';
    }
    // array_search(2, $arr35);

    // удаление элемента unset($arr35[3]);
    $arr35 = [5=>1, 2, 3];
    if(in_array(2, $arr35)) {
        echo 'Есть значение 2 в arr35';
    } else {
        echo 'Нет значения 2 в arr35';
    }
?>
