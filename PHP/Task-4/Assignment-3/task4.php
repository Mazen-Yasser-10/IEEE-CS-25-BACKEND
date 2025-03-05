<?php

    setcookie("site[color]", "blue", 0, "/" ,"localhost");
    setcookie("site[font]", "Swat", 0, "/" ,"localhost");
    setcookie("site[layout]", "boxed", 0, "/","localhost");
    echo "<pre>";
    print_r($_COOKIE);
    
?>
