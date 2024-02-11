<?php
include 'koneksi.php';
$id_kls = $_GET['id_kls'];
$sql = "DELETE FROM kls WHERE id_kls='$id_kls'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}
mysqli_close($conn);
?>