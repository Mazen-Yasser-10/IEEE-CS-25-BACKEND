<?php
    $admins = ["Osama", "Ahmed", "Sayed"];

    // Input Name "Osama"
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        echo "The Request Method Is Post And Username Is $name <br>";
        if(in_array($name, $admins)){
            echo "This Username $name Is Admin";
        }
    }
    // Needed Output
//    "The Request Method Is Post And Username Is Osama"
//    "This Username Osama Is Admin"
?>