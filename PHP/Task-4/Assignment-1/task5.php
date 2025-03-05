<?php
    //method 1
    echo basename(__FILE__)."<br>";
    //method 2
    echo basename($_SERVER['PHP_SELF'])."<br>";
    //method 3
    echo basename($_SERVER['SCRIPT_NAME'])."<br>";
    //method 4
    echo pathinfo(__FILE__,PATHINFO_BASENAME)."<br>";
    // Output

    //"index.php"
    //"index.php"
    //"index.php"
    //"index.php"
?>