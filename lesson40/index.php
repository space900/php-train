<!-- Рекурсия -->

<?php
    function recursiya($counter) {
        if($counter>0) {
            echo ($counter--) . '<br>';
            recursiya($counter);
        } else return;
    }
    recursiya(8);
?>
<br>

<!-- вложенные -->
<?php
    function outter() {
       function inner() {
           return "hello!";
       }
    }
    outter();
    echo inner();
?>

<!-- анонимные -->

<br>
<?php
    class Point1 {
        public $x;
        public $y;
    }
    $fst = new Point1;
    $fst->x = 12;
    $fst->y = 5;

    $snd = new Point1;
    $snd->x = 1;
    $snd->y = 1;

    $thd = new Point1;
    $thd->x = 7;
    $thd->y = 4;

    $arr40 = [$fst, $snd, $thd];

    usort($arr40, function($a, $b) {
        $dist_a = sqrt($a -> x ** 2 + $a -> y ** 2);
        $dist_b = sqrt($b -> x ** 2 + $b -> y ** 2);
        return $dist_a <=> $dist_b;
    });

    echo '<pre>';
    print_r($arr40);
    echo '</pre>';
?>
