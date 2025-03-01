<?php
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

    $mix = array_filter($mix, function($value) {
        if(is_int($value) && $value % 2 == 1) {
            return $value;
        }
    });
    sort($mix);
    echo "<pre>";
    print_r($mix);
    // Output
    //Array
    //(
    //    [0] => 1
    //  [1] => 3
    //  [2] => 5
    //  [3] => 7
    //)
?>