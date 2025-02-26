<?php
    $mix = [1, 2, "A", "B", "C", 3, 4];

    $numbers = 0;
    $letters = 0;
    foreach ($mix as $value) {
        if (is_numeric($value)) {
            echo $value . "<br>";
            $numbers++;
        } else {
            $letters++;
        }
    }
    echo "$numbers Numbers Printed\"<br>";
    echo "$letters Letters Ignored\"<br>";
    // Output
    //1
    //2
    //3
    //4
    //"4 Numbers Printed"
    //"3 Letters Ignored"
?>