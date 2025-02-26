<?php
    $start = 10;
    $end = 0;
    $stop = 3;
    for($i = $start; $i >= $end; $i--){
        if($i < 10){
            echo "0".$i."<br>";
            if($i == $stop){
                break;
            }
        }else{
            echo $i."<br>";
        }
    }

    // Needed Output
    //10
    //09
    //08
    //07
    //06
    //05
    //04
    //03
?>