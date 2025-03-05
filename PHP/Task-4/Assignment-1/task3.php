<?php
    if (!is_dir("Programming/PHP")) {
        mkdir("Programming/PHP", 0701, true);
    }

    if (is_dir("Programming")) {
        rmdir("Programming/PHP");
        rmdir("Programming");
        echo "Directory Programming/PHP Removed<br>";
        echo "Directory Programming Removed<br>";
    }
    // Output
    //"Directory Programming/PHP Removed"
    //"Directory Programming Removed"
?>