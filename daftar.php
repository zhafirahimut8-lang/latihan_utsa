<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
        }

        .container{
            width:350px;
            background:white;
            padding:30px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.2);
        }

        .container h2{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        .input-box{
            margin-bottom:15px;
        }

        .input-box label{
            display:block;
            margin-bottom:5px;
            color:#555;
        }

        .input-box input{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:8px;
            outline:none;
        }

        .input-box input:focus{
            border-color:#74ebd5;
        }

        button{
            width:100%;
            padding:10px;
            background:#74ebd5;
            border:none;
            border-radius:8px;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#5fd3bc;
        }

        .pesan{
            text-align:center;
            margin-top:15px;
            color:green;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registrasi Akun</h2>

    <form method="POST">
        <div class="input-box">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-box">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" name="daftar">Daftar</button>
    </form>

<?php
include "koneksi.php";

if(isset($_POST['daftar'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_users(username,email,password)
            VALUES('$username','$email','$password')";

    if(mysqli_query($conn,$sql)){
        echo "<div class='pesan'>Registrasi berhasil!</div>";
    }else{
        echo "Gagal daftar";
    }
}
?>

</div>

</body>
</html>