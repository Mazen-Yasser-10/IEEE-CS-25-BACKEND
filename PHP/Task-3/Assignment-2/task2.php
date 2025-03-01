<?php

    $codes = ["H", "C", "J"];
    $means = ["HTML", "CSS", "JavaScript"];
    $combined = array_combine($codes, $means);
    echo "<pre>";
    print_r($combined);
    // Output
    //Array
    //(
    //    [h] => HTML
    //    [c] => CSS
    //[j] => JavaScript
    //)
?>