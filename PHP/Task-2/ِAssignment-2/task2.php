<?php
    $index = 0;
    for($index ; $index <= 18; $index+=2){
        echo $index+2 . "<br>";
    }
    $index = 0;
    while($index<=18)
    {
        echo $index+2 . "<br>";
        $index += 2;
    }
    $index = 0;
    do{
        echo $index+2 . "<br>";
        $index += 2;
    }while($index<=18);
        // Needed Output
        //2
        //4
        //6
        //8
        //10
        //12
        //14
        //16
        //18
        //20
?>