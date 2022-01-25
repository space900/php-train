<!-- Цикл For -->
<?php
    // for ($a=5, $b=0; $a>0, $b<5; $a--, $b++) {
    //     echo "$a - $b<br>";
    // }

    for ($c=2; $c<100; $c++) {
        for($d=2; $d<$c; $d++) {
            if(($c % $d) !=0) {
                continue;
            } else {
                $flag = true;
                break;
            }
        }
        if(!$flag) echo "$c ";
        $flag = false;
    }
?>
