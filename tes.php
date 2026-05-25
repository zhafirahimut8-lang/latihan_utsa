<?php
include "koneksi.php";

if(isset($_POST['daftar'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // query simpan data
    $sql ="INSERT INTO tb_userss(username,email,password)
       VALUES( '$username','$email','$password')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>
                alert('Registrasi berhasil');
                window.location='daftar.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi gagal');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Registrasi</title>
</head>
<body>

<center>

<h2>Form Registrasi</h2>

<form method="POST">

    <label>username</label><br>
    <input type="text" name="username" required>
    <br></br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br></br>

    <label>password</label></br>
    <input type="password"name="password" required>
    <br></br>

    <button type="submit" name="daftar">daftar</button>

</form>

</center>

</body>
</html>
