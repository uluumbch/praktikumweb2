<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 5 modul 3 | Bachrul Uluum</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="input">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['input'];
        $arrayKata = str_split($kata);
        $jumlahKata = count($arrayKata);

        foreach ($arrayKata as $key => $value) {
            for ($i = 0; $i < $jumlahKata; $i++) {
                if ($i == 0) {
                    echo strtoupper($value);
                } else {
                    echo strtolower($value);
                }
            }
        }
    }
    ?>
</body>

</html>