<!-- List -->

<?php
    $test = [1,2,3];
    list($one, $two, $three, $four) = $test;

    echo $one . '<br>';
    echo $two . '<br>';

    $f = 6;
    $g = 3;

    echo "до:<br>";
    echo "f: $f<br>";
    echo "g: $g<br>";

    list($g, $f) = [$f, $g];

    echo "после:<br>";
    echo "f: $f<br>";
    echo "g: $g<br>";
?>
