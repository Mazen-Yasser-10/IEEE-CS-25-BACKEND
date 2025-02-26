<?php
    // Write Function Content Here
    function calculate($num1,$num2,$op="a")
    {
        $result=0;
        if($op=="a" || $op=="add")
        {
            $result=$num1+$num2;
        }
        elseif($op=="s" || $op=="subtract")
        {
            $result=$num1-$num2;
        }
        elseif($op=="m" || $op=="multiply")
        {
            $result=$num1*$num2;
        }
        else
        {
            return "Invalid Operator<br>";
        }
        return $result."<br>";
    }
    // Needed Output
    echo calculate(10, 20); // 30
    echo calculate(10, 20, "a"); // 30
    echo calculate(10, 20, "s"); // -10
    echo calculate(10, 20, "subtract"); // -10
    echo calculate(10, 20, "multiply"); // 200
    echo calculate(10, 20, "m"); // 200
?>