<?php 
$mahasiswa = [
    [
        "nama" => "Alfi Mifta Nurhakim",
        "nrp" => "233040013",
        "email" => "alfi.233040013@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpeg"
    ],
    [
        "nama" => "Arinal Haq",
        "nrp" => "233040149",
        "email" => "arinal@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "2.jpeg"
    ],
    [
        "nama" => "Aufa Ramadhan",
        "nrp" => "233040028",
        "email" => "aufa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "3.jpeg"
    ],
    [
        "nama" => "Candra Kirana",
        "nrp" => "233040037",
        "email" => "candra@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.jpeg"
    ],
    [
        "nama" => "Dhaffa galang",
        "nrp" => "233040024",
        "email" => "galang@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "5.jpeg"
    ],
    [
        "nama" => "I Made Suraya",
        "nrp" => "233040034",
        "email" => "made@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "6.jpeg"
    ],
    [
        "nama" => "Muhammad Tawakal",
        "nrp" => "233040021",
        "email" => "tawakal@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "7.jpeg"
    ],
    [
        "nama" => "Rudol Prasetyo",
        "nrp" => "233040152",
        "email" => "rudol@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "8.jpeg"
    ],
    [
        "nama" => "Biagi Archie Fais",
        "nrp" => "233040006",
        "email" => "biagi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "9.jpeg"
    ],
    [
        "nama" => "Riki",
        "nrp" => "233040025",
        "email" => "riki@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "10.jpeg"
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