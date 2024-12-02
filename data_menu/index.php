<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>DATA RESTAURANT 2024/2025</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2> DATA MENU RESTAURANT</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi'];?></p>
        <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>NAMA MENU</th>
                <th>HARGA</th>
                <th>KATEGORI</th>
                <th><a href="create.php"> Tambah data</a></th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM tb_menu");

            while ($menu= $query->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $menu['nama'] ?></td>
                <td><?php echo $menu['harga'] ?></td>
                <td><?php echo $menu['kategori'] ?></td>

                <td align="center">
                    <a href="update.php?id=<?php echo $menu['menu_id'] ?>">Edit</a>

                    <a onlick="return confirm ('anda yakin ingin menghapus data?')"
                  href="delete.php?id=<?php echo $menu['menu_id']?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>

         </tbody>

     </table>
     <p> TOTAL: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>