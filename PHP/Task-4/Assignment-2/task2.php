<?php
    $date = "2005-10-02";

    date_default_timezone_set('Africa/Cairo');
    echo date_default_timezone_get()."<br>";
    $newDate = (new DateTime($date))->modify('+15 hours +15 minutes +15 seconds');
    echo $newDate->format('Y, F, l \'dS\' H:i:s');
    // Output Needed
    //"Africa/Cairo"
    //"2005, October, Sunday '02nd' 15:15:15"
?>