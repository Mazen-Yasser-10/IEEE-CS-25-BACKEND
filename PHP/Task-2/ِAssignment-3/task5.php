<?php
    function check_status($a, $b, $c) {
        // Function Code Here
        $name = is_string($a) ? $a : (is_string($b) ? $b : $c);
        $age = is_int($a) ? $a : (is_int($b) ? $b : $c);
        $isAvailable = is_bool($a) ? $a : (is_bool($b) ? $b : $c);
        return "Hello $name, Your Age Is $age, You Are " . ($isAvailable ? "Available" : "Not Available") . " For Hire<br>";

    }

    // Needed Output
    echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
    echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
?>