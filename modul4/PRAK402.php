<?php


$data = [
    [
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => "87",
        "Nilai UAS" => "65"
    ],
    [
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => "76",
        "Nilai UAS" => "79"
    ],
    [
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => "50",
        "Nilai UAS" => "41"
    ],
    [
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => "60",
        "Nilai UAS" => "75"
    ]
];



for ($i = 0; $i < count($data); $i++) {
    $NilaiBaru = (40 / 100 * $data[$i]["Nilai UTS"]) + (60 / 100 * $data[$i]["Nilai UAS"]);
    $data[$i]["Nilai Akhir"] = $NilaiBaru;
    if ($NilaiBaru >= 80) {
        $data[$i]["Nilai Huruf"] = "A";
    } elseif ($NilaiBaru >= 70) {
        $data[$i]["Nilai Huruf"] = "B";
    } elseif ($NilaiBaru >= 60) {
        $data[$i]["Nilai Huruf"] = "C";
    } elseif ($NilaiBaru >= 50) {
        $data[$i]["Nilai Huruf"] = "D";
    } else {
        $data[$i]["Nilai Huruf"] = "E";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL PRAK402</title>
    <style>
        table th {
            padding: 1.2rem;
            background-color: #005555;
            color: #F7FF93;
        }

        table {
            border: 2px solid #069A8E;
            border-collapse: collapse;
            color: #A1E3D8;
            background-color: #000;
        }
    </style>
</head>

<body>
    <table border="1">
        <?php
        echo "<tr>";
        foreach ($data[0] as $key => $value) {
            echo "<th>" . $key . "</th>";
        }
        echo "</tr>";

        foreach ($data as $v) {
            echo "<tr>";
            foreach ($v as  $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }


        ?>

    </table>
</body>

</html>