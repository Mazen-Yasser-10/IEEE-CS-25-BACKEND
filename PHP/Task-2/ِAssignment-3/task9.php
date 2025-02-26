<?php
    // Write Function Content Here
    $greet = function($name) {
        return "Greetings<br>";
    };
    $greet = fn($name) => "Greetings<br>";
    // Needed Output
    echo $greet("Osama"); // Greetings
?>