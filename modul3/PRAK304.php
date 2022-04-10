<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = (int)$_POST["nilai"];
}
if (isset($_POST['tambah'])) {
    $nilai += 1;
}

if (isset($_POST['kurang'])) {
    $nilai -= 1;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 4 modul 3 | Bachrul Uluum</title>
    <style>
        .gambar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>


<body>
    <?php
    if (empty($nilai)) : ?>
        <form action="" method="post">
            Jumlah Bintang: <input type="text" name="nilai">
            <button type="submit" name="masuk">Masukkan Nilai</button>
        </form>

    <?php
    endif;
    if (!empty($nilai)) :
    ?>
        jumlah bintang = <?= $nilai; ?>

        <br>
        <?php
        for ($i = 0; $i < $nilai; $i++) {
            echo "<img src='./star-image.png' class='gambar'>";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <button type="submit" name="tambah" value="tambah">tambah</button>
            <button type="submit" name="kurang" value="kurang">kurang</button>
        </form>


    <?php endif; ?>
</body>

</html>