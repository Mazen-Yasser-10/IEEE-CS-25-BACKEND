<?php
    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];

    for($i = 0; $i < count($nums); $i++) {
        $result = $nums[$i+$help_num] + $nums[$i];
        echo "{$nums[$i]} + {$nums[$i+$help_num]} = $result<br>";
        $help_num-=2;
    }
    // Output
    //"2 + 10 = 12"
    //"4 + 6 = 10"
    //"5 + 5 = 10"
    //"6 + 4 = 10"
    //"10 + 2 = 12"
?>