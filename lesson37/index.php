<!-- Функции -->

<?php
    function myFunc(int $a, $b=3) {
        $sum = $a + $b;
        return $sum;
    }

    echo myFunc(15,1);

    function args(...$items) {
        foreach ($items as $arg) {
            ddd($arg);
        }

    }

    args('PHP', 'JS', 'C++', 'Python');
?>
