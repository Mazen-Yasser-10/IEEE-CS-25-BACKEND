<?php

    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;
    $chars = array_pad($chars, strlen($char)*count($chars) , $char[$zero]);
    echo "<pre>";
    print_r($chars);
    // Output
    //Array
    //(
    //    [0] => A
    //    [1] => B
    //[2] => C
    //[3] => D
    //[4] => E
    //[5] => @
    //[6] => @
    //[7] => @
    //[8] => @
    //[9] => @
    //)
?>