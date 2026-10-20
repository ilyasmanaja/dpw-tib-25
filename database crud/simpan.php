<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];

    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES ('$nim', '$nama', '$jurusan')";
    mysqli_query($koneksi, $sql);

    header("Location: index.php");
    exit;
}

?>