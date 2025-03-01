<?php

    $nums = [10, 20, 30];

    $sum = array_reduce($nums, function($carry, $num) {
        return $carry + $num;
    });
    echo $sum."<br>";
    echo array_sum($nums)."<br>";
    // Output
    //60
    //60
?>