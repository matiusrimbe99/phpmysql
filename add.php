<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>

<body>
    <h1>Tambah Data Pegawai</h1>
    <form action="insert.php" method="POST">
        <div style="margin-bottom: 16px;">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div style="margin-bottom: 16px;">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat"></textarea>
        </div>
        <div style="margin-bottom: 16px;">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="nomor_seluler">Nomor Seluler</label>
            <input type="text" name="nomor_seluler" id="nomor_seluler">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="status_perkawinan">Status Perkawinan</label>
            <select name="status_perkawinan" id="status_perkawinan">
                <option value="Kawin">Kawin</option>
                <option value="Belum Kawin">Belum Kawin</option>
            </select>
        </div>

        <button type="submit">Tambah</button>
        <a href="list.php">Kembali</a>
    </form>
</body>

</html>