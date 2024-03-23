<?php
if(isset($_POST['submit']) )  {
    if ($_POST["username"] == "admin"  && $_POST["password"] == "admin") {
    header("Location: admin.php");
    }else {
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: Arial, sans-serif;
            background-color: #ddd;
        }

        .container {
            width: 300px;
            margin: 150px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
            
        p {
            text-align: center;
            color: red; 
            font-family: "Noto Sans", sans-serif;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Login Admin</h1>
    <?php if(isset ($error)) : ?>
        <p>Username / Password Salah.</p>
    <?php endif; ?>
    <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>
            <button type="submit" name="submit">Login</button>

    </form>
</div>
</body>
</html>