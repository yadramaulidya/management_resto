<?php 

session_start(); 
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $id=$_POST['menu_id'];
    $namaMenu= $_POST['nama'];
    $hrg = $_POST['harga'];
    $kategori= $_POST['kategori'];
   
    $sql = "UPDATE tb_menu SET
    nama='$namaMenu',
    harga='$hrg',
    kategori='$kategori'
    WHERE menu_id=$id";
    
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi']= "data menu berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi']= "data menu gagal diperbarui!";
    }

    header('Location: index.php');
}else{

    die("akses ditolak...");
}
?>

