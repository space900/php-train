<!-- JSON -->

<?php
    $arr = [
        'name' => 'Petr',
        'phones' => [
            '888',
            '777'
        ]
    ];
    // преобразовать в json;
    $encodeArr = json_encode($arr);
    ddd($encodeArr);
    // из json в массив
    ddd(print_r(json_decode($encodeArr, true)));
?>
