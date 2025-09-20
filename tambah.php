<?php
include "config.php";

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas = $_POST['kelas'];

    mysqli_query($conn, "INSERT INTO students (nama, jekel, kelas) VALUES ('$nama','$jekel','$kelas')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" required><br><br>
        Jenis Kelamin: 
        <select name="jekel" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br><br>
        Kelas: <input type="text" name="kelas" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>