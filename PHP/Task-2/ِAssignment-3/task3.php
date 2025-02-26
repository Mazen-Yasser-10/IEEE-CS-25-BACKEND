<?php
    // Write Function Content Here
    function sum_all(...$args): string
    {
        $sum = 0;
        foreach ($args as $arg) {
            if($arg == 5)
            {
                continue;
            }
            elseif($arg == 10)
            {
                $arg = 20;
            }
            $sum += $arg;
        }
        return $sum."<br>";
    }
    // Needed Output
    echo sum_all(10, 12, 5, 6, 6, 10); // 64
    echo sum_all(5, 10, 5, 10); // 40
?>