<?php
include("connection.php");
$keyword = $_GET['keyword'];

$query = $db->query("SELECT * FROM pegawai WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%'");
$result = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>

<body>
    <h1>Hasil Pencarian</h1>
    <form method="GET" action="search.php">
        <input type="text" name="keyword" placeholder="Ketikkan pencarian...">
        <button type="submit">Search</button>
    </form>
    <a href="add.php">Tambah Data Pegawai</a> | <a href="list.php">Kembali ke List</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php foreach ($result as $index => $pegawai) : ?>
            <tr>
                <td><?php echo $index + 1 ?></td>
                <td><a href="profile.php?id=<?php echo $pegawai['id']; ?>"><?php echo $pegawai['nama'] ?></a></td>
                <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                <td><?php echo $pegawai['alamat'] ?></td>
                <td><a href="edit.php?id=<?php echo $pegawai['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $pegawai['id']; ?>">Delete</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>