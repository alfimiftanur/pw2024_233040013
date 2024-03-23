<?php
// cek apakah tombol submit udah dicek atau belum
if(isset($_POST['submit']) )  {
    // cek username & password
    if ($_POST["username"] == "admin"  && $_POST["password"] == "admin") {
    // jika benar, redirect ke halaman admin
    header("Location: admin.php");
    }else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset ($error)) : ?>
        <p style="color: red; font-style:italic;">Username atau Password Salah.</p>
    <?php endif; ?>
<ul>
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>

    </form>
</ul>
        
</body>
</html>