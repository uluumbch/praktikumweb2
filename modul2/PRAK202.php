<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 - Bachrul Uluum</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $pesanErrNama = $pesanErrNIM = $pesanErrJK = "";
    $nama = "";
    $nim = "";
    $jk = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $pesanErrNama = "Nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $pesanErrNIM = "NIM tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["jk"])) {
            $pesanErrJK = "Jenis kelamin tidak boleh kosong";
        } else {
            $jk = $_POST["jk"];
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Nama: <input type="text" name="nama" value="<?php echo $nama ?>"><span class="error">* <?php echo $pesanErrNama ?> </span><br>

        NIM: <input type="text" name="nim" value="<?php echo $nim ?>"><span class="error">* <?php echo $pesanErrNIM ?> </span><br>

        jenis kelamin: <span class="error">* <?php echo $pesanErrJK ?> </span><br>

        <input type="radio" name="jk" <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?> value="Laki-Laki">Laki-laki <br>

        <input type="radio" id="p" name="jk" <?php if (isset($jk) && $jk == "Perempuan") echo "checked"; ?> value="Perempuan">Perempuan<br>


        <input type="submit" name="enter" value="submit">
    </form>
    <?php
    if (!empty($nama) && !empty($nim) && !empty($jk)) {

        echo $nama . "<br>";
        echo $nim . "<br>";
        echo $jk . "<br>";
    }
    ?>
</body>

</html>