<?php
    $message = "Hello";

    // Write Your Code Here
    $$message = function ($name) use ($message) {
        return $message . " " . $name . "<br>";
    };
    echo $Hello("Osama"); // Hello Osama
?>