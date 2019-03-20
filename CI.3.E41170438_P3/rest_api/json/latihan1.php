<?php
$mhs =
    [
        [
            "nama" => "Ali",
            "umur" => 20
        ],

        [
            "nama" => "Dani",
            "umur" => 29
        ]

    ];
$data = json_encode($mhs);
echo $data;
