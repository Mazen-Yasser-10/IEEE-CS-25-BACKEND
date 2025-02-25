<?php
    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = $a . " " . $b . " " . $c . "<br>";
    echo $d;
    // Method Two
    $d = "$a "."$b "."$c "."<br>";
    echo $d;
    // Method Three
    $d = "{$a} "."{$b} "."{$c} "."<br>";
    echo $d;
    // Method Four
    $d = "${a} "."${b} "."${c} "."<br>";
    echo $d;
?>
