<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 modul 3 | Bachrul Uluum</title>
</head>

<body>
    <form action="" method="post">
        Jumlah Peserta:
        <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $peserta = $_POST['jumlah'];
        $perulagan = 1;

        while ($perulagan <= $peserta) {

            if ($perulagan % 2 == 0) {
                echo "<h1 style=\"color:green\">Peserta ke-$perulagan</h1>";
            } else {
                echo "<h1 style=\"color:red\">Peserta ke-$perulagan</h1>";
            }
            $perulagan++;
        }
    }
    ?>
</body>

</html>