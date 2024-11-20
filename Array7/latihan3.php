<?php 
$mahasiswa = [
["nurma","000721"
,"Rekayasa Perangkat Lunak","nurma@gmail.com"],
["reta","000722"
,"Rekayasa Perangkat Lunak","reta@gmail.com"],
["alvi","000723"
,"Rekayasa Perangkat Lunak","alvi@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?=$mhs[0]; ?></li>
        <li>NRP : <?=$mhs[1]; ?></li>
        <li>Jurusan : <?=$mhs[2]; ?></li>
        <li>Email : <?=$mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>