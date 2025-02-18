<?php include "connection.php";
$id = $_GET['id'];

try {
    $db->query("DELETE FROM pegawai WHERE id = $id");
    header("location:list.php");
} catch (Exception $e) {
    echo "Error: " . $e;
}
