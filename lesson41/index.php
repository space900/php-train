<!-- Замыкания -->


<?php
    $message = "Текст";
    $mFu = function() use ($message) {
        $message = "New";
        return $message;
    };
    ddd($mFu());

    ddd($message);
?>
<?php
    function odd(int $number) {
        if($number % 2 == 0) {
            return false;
        } else {
            return true;
        }
    }
    echo odd(5);
?>
<br>
<?php
    function sum(...$items) {
        $sum = 0;
        for($o=0; $o<count($items); $o++) {
            $sum += $items[$o];
        }
        return $sum;

    }
    echo sum(10,5,2,3,1);
?>
