<?php
    $title = "E&z\$r0 W\$b Sch00&";

    $replacements = ["&" => "l", "\$" => "e", "0" => "o"];
    $title = str_replace(array_keys($replacements), array_values($replacements), $title, $count);

    echo "$title<br>";
    echo $count;
    // Output
    //"Elzero Web School"
    //7
?>