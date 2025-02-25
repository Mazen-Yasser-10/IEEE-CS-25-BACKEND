<?php
    $a = "10";

    echo +$a. "<br>";
    echo gettype(+$a). "<br>";

    echo 0 + $a. "<br>";
    echo gettype(0 + $a). "<br>";

    echo intval($a). "<br>";
    echo gettype(intval($a)). "<br>";

    echo (int) $a. "<br>";
    echo gettype((int) $a). "<br>";
    
    settype($a, "integer");
    echo $a. "<br>";
    echo gettype($a). "<br>";
?>
