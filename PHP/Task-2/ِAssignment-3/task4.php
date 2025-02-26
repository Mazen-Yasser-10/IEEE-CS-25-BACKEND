<?php
    // Write Function Content Here
    function multiply(...$args)
    {
        $result = 1;
        foreach ($args as $arg) {
            if (is_numeric($arg) ) {
                if(is_float($arg)) {
                    $arg = (int)$arg;
                }
                $result *= $arg;
            }
        }
        return $result."<br>";
    }
    // Needed Output
    echo multiply(10, 20); // 200
    echo multiply("A", 10, 30); // 300
    echo multiply(100.5, 10, "B"); // 1000
?>