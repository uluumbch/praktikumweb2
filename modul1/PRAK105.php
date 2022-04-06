<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone</title>
    <style>
        table,
        td {
            border: 1px solid;
        }

        th {
            background-color: red;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php
    $hp = ["hp1" => "Samsung Galaxy S22", "hp2" => "Samsung Galaxy S22+", "hp3" => "Samsung Galaxy A03", "hp4" => "Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <th>
            Daftar Smartphone Samsung
        </th>
        <tr>
            <td><?php echo $hp["hp1"] ?></td>
        </tr>
        <tr>
            <td><?php echo  $hp["hp2"] ?></td>
        </tr>
        <tr>

            <td><?php echo $hp["hp3"] ?></td>
        </tr>
        <tr>

            <td><?php echo $hp["hp4"] ?></td>
        </tr>
    </table>
</body>

</html>