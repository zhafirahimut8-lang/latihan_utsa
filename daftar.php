<?php
include "koneksi.php";

if(isset($_POST['daftar'])) {

    $nama_lengkap = $_POST['nama_lengkap'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // query simpan data
    $sql = "INSERT INTO tb_userss(nama_lengkap,email,password)
            VALUES('$nama_lengkap','$email','$password')";

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
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<center>

<h2>Form Registrasi</h2>

<form method="POST">

    <label>nama_lengkap</label><br>
    <input type="text" name="nama_lengkap" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" required>
    <br><br>

    <label>Password</label><br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="daftar">Daftar</button>

</form>

</center>

</body>
</html>