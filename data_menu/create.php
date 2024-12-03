<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>DATA RESTAURANT 2024/2025</title>
</head>
<body>
    <h3>Tambah data menu</h3>
    <form action="proses_create.php" method="POST">
        <table borde="0">
            <tr>
                <td>NAMA MENU</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td>KATEGORI</td>
                <td><input type="text" name="kategori" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
</form>

    
</body>
</html>