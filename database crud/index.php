<?php

include 'koneksi.php';
$query = "SELECT * FROM mahasiswa ORDER BY id_mhs DESC";
$result = mysqli_query($koneksi, $query);
?>

<a href="tambah.php">+ Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>

<?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
            <td><?= htmlspecialchars($row['nim']); ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td><?= htmlspecialchars($row['jurusan']); ?></td>
            <td>
                <a href="edit.php?id=<?= htmlspecialchars($row['id_mhs']); ?>">Edit</a>
                <a href="hapus.php?id=<?= htmlspecialchars($row['id_mhs']); ?>">Hapus</a>
            </td>
        </tr>
<?php } ?>