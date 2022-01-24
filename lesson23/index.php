<!-- Switch Case -->

<?php 
    $char = 'php';
    switch($char) {
        case 'php':
            ?>
            <h1>Язык PHP</h1>
            <?php
            break;
        case 'js':
            ?>
            <h1>Язык JavaScript</h1>
            <?php
            break;
        case 'c#':
            ?>
            <h1>Язык C#</h1>
            <?php
            break;
        default:
        ?>
        <h1>Какой-то другой язык</h1>
        <?php
    }
    echo '<br>';
    $number = 78;
    switch(true) {
        case ($number > 0 && $number <= 10):
            echo "$number меньше 10 и больше 0";
            break;
        case ($number > 10 && $number <= 100):
            echo "$number меньше 100 и больше 10";
            break;
        case ($number > 100 && $number <= 1000):
            echo "$number меньше 1000 и больше 100";
            break;
        default:
            echo "$number меньше 1000 или меньше 0";
            break;
    }
?>