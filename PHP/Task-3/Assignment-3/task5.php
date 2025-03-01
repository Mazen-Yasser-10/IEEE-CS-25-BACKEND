<?php

    $url1 = "http://www.elz ero.org";
    $url2 = "http://¥elzero.org";
    $url3 = "https://elzero.org";
    $url4 = "https://elzero.o¥rg";

    function checkURL($url) {
        filter_var($url, FILTER_VALIDATE_URL) ? $valid = "A Valid URL" : $valid = "Not A Valid URL";
        echo $valid . "<br>";
    }

    checkURL($url1);
    checkURL($url2);
    checkURL($url3);
    checkURL($url4);
    
    // Output
    //"Not A Valid URL"
    //"Not A Valid URL"
    //"A Valid URL"
    //"Not A Valid URL"
?>