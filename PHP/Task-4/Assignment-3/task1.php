<?php
    $expire = time() + (2 * 30 * 24 * 60 * 60) + (5 * 24 * 60 * 60);

    setcookie("site[layout]", "boxed", $expire, "/","localhost");
    setcookie("site[font]", "Swat", $expire, "/" ,"localhost");
    setcookie("site[color]", "blue", $expire, "/" ,"localhost");
    
?>
