<?php
include 'koneksi.php';
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$data = mysqli_fetch_array($ambil);

if (!$data) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan' WHERE id_mhs= '$id'");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h2>Form Edit Mahasiswa</h2>
    <form action="edit.php?id=<?= $id; ?>" method="POST">

        <div>
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim" value="<?= $data['nim']; ?>" required>
        </div><br>

        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" value="<?= $data['nama']; ?>" required>
        </div><br>

        <div>
            <label for="jurusan">Jurusan:</label><br>
            <input type="text" id="jurusan" name="jurusan" value="<?= $data['jurusan']; ?>" required><br>
        </div><br>

        <button type="submit" name="update">Simpan Perubahan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>