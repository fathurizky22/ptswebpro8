<?php
include "config.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $nama  = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas = $_POST['kelas'];

    mysqli_query($conn, "UPDATE students SET nama='$nama', jekel='$jekel', kelas='$kelas' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Siswa</h2>
    <form method="post">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br><br>
        Jenis Kelamin: 
        <select name="jekel" required>
            <option value="L" <?= ($data['jekel']=="L")?"selected":"" ?>>Laki-laki</option>
            <option value="P" <?= ($data['jekel']=="P")?"selected":"" ?>>Perempuan</option>
        </select><br><br>
        Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required><br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>