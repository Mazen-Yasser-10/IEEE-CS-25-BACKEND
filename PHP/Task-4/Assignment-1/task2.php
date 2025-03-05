<?php
    $size = filesize("E:\Captures\ 2024-05-31 00-47-53.mp4");
    echo "Size In Megabyte Is " . round($size / 1048576, 2) . "<br>";
    echo "Size In Kilobyte Is " . round($size / 1024, 2) . "<br>";
    // Output
    //"Size In Megabyte Is 32"
    //"Size In Kilobyte Is 33261"
?>