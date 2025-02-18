<?php
include "connection.php";
$id = $_GET['id'];

$query = $db->query("SELECT * FROM pegawai WHERE id = $id");
$pegawai = $query->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
</head>

<body>
    <h1>Edit Data Pegawai</h1>
    <form action="update.php" method="POST">
        <div style="margin-bottom: 16px;">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $pegawai['nama']; ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $pegawai['id']; ?>">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-Laki" <?php if ($pegawai['jenis_kelamin'] == "Laki-Laki") echo "selected" ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($pegawai['jenis_kelamin'] == "Perempuan") echo "selected" ?>>Perempuan</option>
            </select>
        </div>
        <div style="margin-bottom: 16px;">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat"><?php echo $pegawai['alamat']; ?></textarea>
        </div>
        <div style="margin-bottom: 16px;">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $pegawai['tempat_lahir']; ?>">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $pegawai['tanggal_lahir']; ?>">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="nomor_seluler">Nomor Seluler</label>
            <input type="text" name="nomor_seluler" id="nomor_seluler" value="<?php echo $pegawai['nomor_seluler']; ?>">
        </div>
        <div style="margin-bottom: 16px;">
            <label for="status_perkawinan">Status Perkawinan</label>
            <select name="status_perkawinan" id="status_perkawinan">
                <option value="Kawin" <?php if ($pegawai['status_perkawinan'] == "Kawin") echo "selected" ?>>Kawin</option>
                <option value="Belum Kawin" <?php if ($pegawai['status_perkawinan'] == "Belum Kawin") echo "selected" ?>>Belum Kawin</option>
            </select>
        </div>

        <button type="submit">Ubah Data</button>
        <a href="list.php">Kembali</a>
    </form>
</body>

</html>