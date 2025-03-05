<?php
    $drives = ['C:', 'E:'];
    foreach ($drives as $drive) {
        $space = disk_total_space($drive) / (1024 ** 4);
        echo number_format($space, 2) . " Terabyte<br>";
    }
    // Output Examples
    //"1.37 Terabyte"
    //"0.46 Terabyte"
?>
