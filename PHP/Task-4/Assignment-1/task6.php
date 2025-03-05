<?php
    //method 1
    $file = file('elzero');
    $c = 0;
    foreach($file as $line){
        if($c < 2) {
            echo $line;
        }
        $c++;
    }
    echo "<br>";
    //method 2
    $file = fopen('elzero', 'r');
    $line1 = fgets($file);
    $line2 = fgets($file);
    echo $line1 . " " .$line2;
    fclose($file);
    echo "<br>";
    //method 3
    $file = file_get_contents('elzero');
    $file = explode("\n", $file);
    echo $file[0] . " " . $file[1] . "<br>";
    //method 4
    $file = file('elzero');
    $twoLines = array_slice($file, 0, 2);
    echo implode(" ", $twoLines);

?>