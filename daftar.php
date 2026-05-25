<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

    <h2>Form Registrasi</h2>

    <form method="POST">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit" name="daftar">Daftar</button>
    </form>

</body>
</html>

<?php
include "koneksi.php";

if(isset($_POST['daftar'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_users(username,email,password)
            VALUES('$username','$email','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registrasi berhasil";
    } else {
        echo "Registrasi gagal";
    }
}
?>