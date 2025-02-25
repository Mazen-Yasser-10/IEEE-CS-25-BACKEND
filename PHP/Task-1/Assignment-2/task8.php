<?php
$array = [
    "FrontEnd" => [
        "HTML",
        "CSS",
        "JS" => [
            "VueJs" => [
                2 => "v2" ,
                3 => "v3"
            ],
            0 => "Reactjs",
            1 => "Svelte"
        ]
    ],
    "BackEnd" => [
        "PHP",
        "MySQL",
        "Security"
    ],
    0 => "Git",
    1 => "Github",
    "Testing" => [
        "Unit Testing",
        "End To End",
        "Integration"
    ]
];
echo "<pre>";
echo print_r($array, true);
?>