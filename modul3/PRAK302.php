<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 modul 3| Bachrul Uluum</title>
    <style>
        .gambar {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url"> <br>
        <input type="submit" value="cetak" name="submit">

    </form>
    <?php
    if (isset($_POST['submit'])) {

        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];

        $a = 1;
        while ($a <= $tinggi) {
            $b = 1;
            while ($b < $a) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
                $b++;
            }
            $c = $tinggi;
            while ($c >= $a) {
                echo "<img src='$url'class='gambar'>";
                $c--;
            }
            echo '<br>';
            $a++;
        }
    }
    ?>
</body>

</html>