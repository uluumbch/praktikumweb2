<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL PRAKTIKUM 401</title>
</head>

<body>
    <form action="" method="post">
        Panjang <input type="text" name="panjang">
        Lebar <input type="text" name="lebar">
        Nilai <input type="text" name="nilai">
        <input type="submit" value="Cetak" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $arrayNilai = explode(" ", $_POST['nilai']);
        // print_r($arrayNilai);
        $arr = array_chunk($arrayNilai, 3);
        // print_r($arr);

        if ($_POST['panjang'] == $_POST['lebar']) {

            echo "<table align=\"center\" border=\"1\">";
            for ($i = 0; $i < $_POST['panjang']; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $_POST['panjang']; $j++) {
                    echo "<td>" . $arr[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>

</html>