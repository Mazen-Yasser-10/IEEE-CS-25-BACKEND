<?php
    $date = "1990-10-01";
    date_default_timezone_set("Africa/Cairo");
    $epoch = 0;
    $date = strtotime($date);
    $days = round(($date - $epoch) / (60 * 60 * 24),1);
    $years = round($days / 365.25,1);
    echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days<br>";
    echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years<br>";
    // Output Needed
    //"From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
    //"From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"
?>