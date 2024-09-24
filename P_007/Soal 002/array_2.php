<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dosen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<table>
    <thead>
    <tr>
        <th>Informasi</th>
        <th>Detail</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    foreach ($Dosen as $info => $detail) {
        echo "<tr>";
        echo "<td>{$info}</td>";
        echo "<td>{$detail}</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

</body>
</html>
