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
    <title>Detail Pegawai</title>
</head>

<body>
    <h1>Detail Pegawai</h1>
    <a href="list.php">Kembali</a>
    <p>Nama</p>
    <h3><?php echo $pegawai['nama']; ?></h3>
    <p>Jenis Kelamin</p>
    <h3><?php echo $pegawai['jenis_kelamin']; ?></h3>
    <p>Alamat</p>
    <h3><?php echo $pegawai['alamat']; ?></h3>
    <p>Nomor Seluler</p>
    <h3><?php echo $pegawai['nomor_seluler']; ?></h3>
    <p>Tempat Lahir</p>
    <h3><?php echo $pegawai['tempat_lahir']; ?></h3>
    <p>Tanggal Lahir</p>
    <h3><?php echo date("d M Y", strtotime($pegawai['tanggal_lahir'])); ?></h3>
    <p>Status Perkawinan</p>
    <h3><?php echo $pegawai['status_perkawinan']; ?></h3>
</body>

</html>