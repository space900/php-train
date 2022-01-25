<!-- Цикл While -->

<?php
    $i = 1;
    while($i <= 5) {
        if($i < 4) continue;
        echo "$i<br>";
        $i++;
    }
?>
