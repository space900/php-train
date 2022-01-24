
<!-- условный оператор if else -->
<?php 
$char = 'php';
    if ($char == 'php') {
?>
        <h1>Язык PHP</h1>
<?php
    } elseif($char == 'js') {
?>
        <h1>Язык JavaScript</h1>
<?php
    } elseif($char == 'c#') {
?>
        <h1>Язык C#</h1>
<?php
    } else {
?>
        <h1>Какой-либо другой язык</h1>
<?php
    }
?>