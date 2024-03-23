<?php
$mahasiswa = [
    [
        "nama" => "Alfi Mifta Nurhakim",
        "nrp" => "233040013",
        "email" => "alfi.233040013@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "spiderman_1.jpg"
    ],
    [
        "nama" => "Dadang",
        "nrp" => "233040001",
        "email" => "dadang@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "spiderman_2.jpg"
    ],
    [
        "nama" => "Agus",
        "nrp" => "233040001",
        "email" => "agus@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "spiderman_3.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=
                <?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=
                <?= $mhs["jurusan"];?>&gambar=<?= $mhs["gambar"];?>">
                <?= $mhs["nama"] ?></a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>

