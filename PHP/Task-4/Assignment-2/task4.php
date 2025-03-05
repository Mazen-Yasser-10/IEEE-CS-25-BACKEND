<?php
    $date = "1990-10-01";
    date_default_timezone_set("Africa/Cairo");
    $epoch = new DateTime("@0");
    $date = new DateTime($date);
    $days = $epoch->diff($date)->days;
    $years = $epoch->diff($date)->y;
    echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days<br>";
    echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years<br>";
    // Output Needed
    //"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
    //"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>