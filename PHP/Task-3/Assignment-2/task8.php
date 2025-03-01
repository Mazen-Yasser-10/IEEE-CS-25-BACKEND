<?php

    // method 1
    $chars = ["A", "B", "C"];
    array_push($chars, "D");
    echo "<pre>";
    print_r($chars);
    echo "</pre>";

    // method 2
    $chars = ["A", "B", "C"];
    $chars[] = "D";
    echo "<pre>";
    print_r($chars);
    echo "</pre>";

    // method 3
    $chars = ["A", "B", "C"];
    $chars[3] = "D";
    echo "<pre>";
    print_r($chars);
    echo "</pre>";

    // method 4
    $chars = ["A", "B", "C"];
    $chars = array_merge($chars, ["D"]);
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    // Output
    //Array
    //(
    //    [0] => A
    //    [1] => B
    //[2] => C
    //[3] => D
    //)
?>