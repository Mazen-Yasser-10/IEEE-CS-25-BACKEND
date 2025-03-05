<?php
    $expire = time() + (2 * 30 * 24 * 60 * 60) + (5 * 24 * 60 * 60);

    setcookie("site[color]", "blue", $expire, "/" ,"localhost");
    setcookie("site[font]", "Swat", $expire, "/" ,"localhost");
    setcookie("site[layout]", "boxed", $expire, "/","localhost");


    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    $color = $_COOKIE['site']['color'];
    $font = $_COOKIE['site']['font'];
    setcookie("site[layout]", "Swat", time()-1, "/" ,"localhost");


?>
