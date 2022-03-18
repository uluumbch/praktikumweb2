<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3 - Bachrul Uluum</title>
</head>

<body>
    <?php
    if (isset($_POST['enter'])) {

        $suhu = $_POST['nilai'];
        $dariSuhu = $_POST['dariSuhu'];
        $keSuhu = $_POST['keSuhu'];
        $hasil;
    }
    ?>
    <form action="" method="post">
        Nilai : <input type="text" name="nilai" value="<?php if (isset($suhu)) echo $suhu ?>">
        Dari: <br>
        <input type="radio" name="dariSuhu" <?php if (isset($dariSuhu) && $dariSuhu == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="dariSuhu" <?php if (isset($dariSuhu) && $dariSuhu == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="dariSuhu" <?php if (isset($dariSuhu) && $dariSuhu == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="dariSuhu" <?php if (isset($dariSuhu) && $dariSuhu == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>

        Ke : <br>
        <input type="radio" name="keSuhu" <?php if (isset($keSuhu) && $keSuhu == "Celcius") echo "checked"; ?> value="Celcius"> Celcius <br>
        <input type="radio" name="keSuhu" <?php if (isset($keSuhu) && $keSuhu == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="keSuhu" <?php if (isset($keSuhu) && $keSuhu == "Rheamur") echo "checked"; ?> value="Rheamur"> Rheamur <br>
        <input type="radio" name="keSuhu" <?php if (isset($keSuhu) && $keSuhu == "Kelvin") echo "checked"; ?> value="Kelvin"> Kelvin <br>
        <input type="submit" name="enter" value="Konversi">
    </form>
    <?php
    if (isset($_POST['enter'])) {
        switch ($dariSuhu) {
            case "Celcius":
                switch ($keSuhu) {
                    case 'Celcius':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu * 1.8 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "°F</h2>";
                        break;
                    case "Rheamur":
                        $hasil = $suhu * 0.8;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($keSuhu) {
                    case 'Celcius':
                        $hasil = ($suhu - 32) * 5 / 9;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = ($suhu - 32) * 0.44444;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu - 32) * 5 / 9 + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Rheamur":
                switch ($keSuhu) {
                    case 'Celcius':
                        $hasil = $suhu  / 0.8;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu * 2.25 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = ($suhu / 0.8) + 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            case "Kelvin":
                switch ($keSuhu) {
                    case 'Celcius':
                        $hasil = $suhu - 273;
                        echo "<h2> Hasil Konversi:" . $hasil . "°C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = ($suhu - 273) * 9 / 5 + 32;
                        echo "<h2> Hasil Konversi:" . $hasil . "℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = ($suhu - 273) * 4 / 5;
                        echo "<h2> Hasil Konversi:" . $hasil . "°R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi:" . $hasil . "°K</h2>";
                        break;
                }
                break;
            default:
                echo "inputan salah";
                break;
        }
    }
    ?>
</body>

</html>