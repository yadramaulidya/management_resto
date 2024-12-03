<?php 

session_start(); 
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $namaMenu = $_POST['nama'];
    $harga= $_POST['harga'];
    $kategori= $_POST['kategori'];
    

    $sql = "INSERT INTO tb_menu
      (nama, harga, kategori)
       VALUES ('$namaMenu', '$harga', '$kategori')";

       $query = mysqli_query($db, $sql);

       
       if ($query) {
        $_SESSION['notifikasi']= "data menu berhasil ditambahkan!";
       } else{
        $_SESSION['notifikasi']= "data menu gagal ditambahkan!";
       }

       
       header('Location: index.php');
} else {

    die ("akses ditolak...");
}
?>
