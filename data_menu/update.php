<?php 

include("../koneksi.php");


$id = $_GET['id'];


$query = $db->query("SELECT * From tb_menu WHERE menu_id= '$id'");
$menu =$query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
   <title> EDIT DATA MENU 2024/2025</title>
   <form action="proses_update.php" method="POST">
   </head>
   <body>
     <h3>EDIT DATA MENU 2024</h3>
  
     
  <input type="hidden" name="menu_id" value="<?php echo $menu['menu_id'];?>">
     <table border="0">
     <tr>
       <td>NAMA MENU</td>
       <td>
       <input type="text" name="nama"
       value="<?php echo $menu['nama']; ?>" required>
       </td>
     </tr>
       <td>HARGA</td>
       <td>
         <input type="text" name="harga"
         value="<?php echo $menu['harga']; ?>" required>
       </td>
     </tr>
    
    <tr>
     <td>KATEGORI</td>
     <td>
     <input type="text" name="kategori"
     value="<?php echo $menu['kategori'];?>">
     </td>
    </tr>
</table>
    <button type="submit" name="simpan"> Simpan</button>
    </form>
</body>
</html>





