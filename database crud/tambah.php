<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Form Tambah Mahasiswa</h2>

    <form action="simpan.php" method="POST">
        <div>
            <label for="nim">Nim:</label><br>
            <input type="text" id="nim" name="nim" required>
        </div><br>

        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required>
        </div><br>

        <div>
            <label for="jurusan">Jurusan:</label><br>
            <input type="text" id="jurusan" name="jurusan" required><br>
        </div><br>

        
        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Batal</a>

    </form>
</body>

</html>