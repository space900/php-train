<!-- Массивы -->

<?php
    $arr = [3 => 'Hello', 5 => 'world', '!'];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    // $arr[] = 'Hello';
    // $var = 'Hello World!';
    // $arr = (array) $var;
?>

<!-- Ассоциативные Массивы -->

<br>
<?php
    $abc = ['one'=> "1", 'two'=> '2'];
    // echo '<pre>';
    // print_r($abc);
    // echo '</pre>';
    echo $abc['one'];
?>

<!-- Многомерные Массивы -->

<br>
<?php
    $transport = [
        'Авто' => ['Audi', 'BMW', 'Reno'],
        'Корабли' => ['Эсминец', 'Фрегат', 'Авианосец']
    ];

    // echo '<pre>';
    // print_r($transport);
    // echo '</pre>';
    echo $transport['Авто']['1'];
?>

<br>
<?php
    $ab['one'][0] = 17;
    echo "Текст " . $ab['one'][0] . "  ещё текст";
    // echo "Текст  {$ab['one'][0]}  ещё текст";
?>

