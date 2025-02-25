<?php

set_error_handler(function() {
    echo "You have an error"."<br>";
});

// Code 1
$a = $b;

// Code 2
$f = file("Not_A_File");

// Code 3
include("Not_A_File");

?>
