<?php
    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    
    echo ucfirst(
            strtolower(
                implode("", array_filter($chars, function($char) {
                    return is_string($char);
                    })
                )
            )
        );
    // Output
    //"Elzero"
?>