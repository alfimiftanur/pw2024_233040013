<?php 
// $mahasiswa = [[
//     "nama" => 
// ]]



// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama :<?= $mhs["nama"];?></li>
            <li>NRP :<?= $mhs["nrp"];?></li>
            <li>Email :<?= $mhs["email"];?></li>
            <li>Jurusan :<?= $mhs["jurusan"];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>