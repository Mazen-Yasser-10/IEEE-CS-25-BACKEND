<?php

    $friends = [
        "AG" => "Ahmed Gamal",
        "OM" => "Osama Mohamed",
        "MG" => "Mahmoud Gamal",
        "AS" => "Ahmed Samy",
        "FA" => "Farid Ahmed",
        "SM" => "Sayed Mohamed"
    ];

    $friends = array_chunk($friends, 2, true);
    echo "<pre>";
    print_r($friends);
    // Output
    //Array
    //(
    //    [0] => Array
    //    (
    //        [ag] => Ahmed Gamal
    //[om] => Osama Mohamed
    //    )
    //  [1] => Array
    //(
    //    [mg] => Mahmoud Gamal
    //[as] => Ahmed Samy
    //    )
    //  [2] => Array
    //(
    //    [fa] => Farid Ahmed
    //[sm] => Sayed Mohamed
    //    )
    //)
?>