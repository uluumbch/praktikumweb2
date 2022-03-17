<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td {
            border: 1px solid;
        }
    </style>
    <title>Daftar Smartphone</title>
</head>

<body>
    <?php
    $hp = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <th>
            Daftar Smartphone Samsung
        </th>
        <tr>
            <td><?php echo $hp[0] ?></td>
        </tr>
        <tr>
            <td><?php echo  $hp[1] ?></td>
        </tr>
        <tr>

            <td><?php echo $hp[2] ?></td>
        </tr>
        <tr>

            <td><?php echo $hp[3] ?></td>
        </tr>
    </table>
</body>

</html>