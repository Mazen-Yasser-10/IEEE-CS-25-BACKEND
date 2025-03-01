<?php

    $url1 = "http://www.elz ero.org";
    $url2 = "http://¥elzero.org";
    $url3 = "https://elzero.org";
    $url4 = "https://elzero.o¥rg";

    $url1 = filter_var($url1, FILTER_SANITIZE_URL);
    $url2 = filter_var($url2, FILTER_SANITIZE_URL);
    $url3 = filter_var($url3, FILTER_SANITIZE_URL);
    $url4 = filter_var($url4, FILTER_SANITIZE_URL);

    echo $url1 . "<br>";
    echo $url2 . "<br>";
    echo $url3 . "<br>";
    echo $url4 . "<br>";
    // Output
    //http://www.elzero.org
    //http://elzero.org
    //https://elzero.org
    //https://elzero.org
?>