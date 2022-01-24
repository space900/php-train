<?php
    class ConstClass {
        const NAME = "str";
    }
    if(defined('ConstClass::NAME')) {
        echo "Константа определена";
    }
?>