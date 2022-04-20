<?php

$data =
    [
        [
            "no" => 1, "nama" => "Ridho", "MK" =>
            [
                "Pemrograman I",
                "Praktikum Pemrograman I",
                "Pengantar Lingkungan Lahan Basah",
                "Arsitektur Komputer"
            ], "SKS" =>
            [2, 1, 2, 3]
        ],
        [
            "no" => 2, "nama" => "Ratna", "MK" =>
            [
                "Basis Data I",
                "Praktikum Basis Data I",
                "Kalkulus"
            ], "SKS" =>
            [2, 1, 3]
        ],
        [
            "no" => 3, "nama" => "Tono", "MK" =>
            [
                "Rekayasa Perangkat Lunak",
                "Analisis dan Perancangan Sistem",
                "Komputasi Awan",
                "Kecerdasan Bisnis"
            ], "SKS" =>
            [3, 3, 3, 3]
        ]
    ];

foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
        echo "$k <br>";
        if ($k == "MK" || $k == "SKS") {
            foreach ($data[$key][$k] as $a => $b) {
                echo "$b ";
            }
        } else {
            echo "$v ";
        }
    }
    echo "<br>";
}

echo "<table border='1'>";
echo "<tr>";
foreach ($data[0] as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";

foreach ($data as  $value) {
    echo
}
echo "</table>";
