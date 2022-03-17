<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1 - Bachrul Uluum</title>
</head>

<body>
    <form action="" method="post">
        Nama 1 : <input type="text" name="nama1"> <br>
        Nama 2 : <input type="text" name="nama2"><br>
        Nama 3 : <input type="text" name="nama3">
        <input type="submit" value="urutkan">
    </form>

    <?php
    asort($_POST);
    foreach ($_POST as $value) {
        echo $value;
        echo "<br>";
    }
    ?>
</body>

</html>