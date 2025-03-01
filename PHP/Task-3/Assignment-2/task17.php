<?php
    $nums = [1, 2, 3, 4, 5, 6];

    usort($nums, fn() => rand(-1, 1));
    echo "<pre>";
    print_r($nums);
    // Output
    // Every Time The Array Elements Will Be Shuffled

    // Example 1
    //Array
    //(
    //    [0] => 5
    //  [1] => 1
    //  [2] => 6
    //  [3] => 2
    //  [4] => 4
    //  [5] => 3
    //)

    // Example 2
    //Array
    //(
    //    [0] => 4
    //  [1] => 3
    //  [2] => 6
    //  [3] => 1
    //  [4] => 5
    //  [5] => 2
    //)
?>