<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $sql = "DELETE FROM tb_menu WHERE menu_id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data menu berhasil dihapus!";
    }else{
        $_SESSION['notifikasi'] = "Data menu gagal dihapus!";
    }

    header('Location: index.php');
} else {
    die("akses ditolak..");
}
?>
    