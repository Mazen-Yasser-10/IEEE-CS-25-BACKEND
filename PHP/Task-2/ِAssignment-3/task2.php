<?php
    // Write Function Content Here
    function get_arguments(...$args): string
    {
        // method one
        $all = "";
        foreach ($args as $arg) {
            $all .= $arg . " ";
        }
        $all .= "<br>";
        // method two
        $all = "";
        for($i = 0 ; $i < count($args) ; $i++){
            $all .= func_get_arg($i) . " ";
        }
        $all .= "<br>";
        
        return $all;
    };
    // Needed Output
    echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
    echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>