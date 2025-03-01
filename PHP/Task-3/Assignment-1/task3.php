<?php
    $str = 'aAa';
    $num = 3;
    $char = "_";
    
    // Write Your Code Here
    echo str_replace(" ", $char, str_repeat(strtolower($str) . " ", $num));
    // aaa_aaa_aaa_
?>