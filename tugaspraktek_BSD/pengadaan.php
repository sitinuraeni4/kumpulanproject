<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengadaan Barang</title>
</head>
<style>
     body {
            font-family: Arial, sans-serif;
            margin: 200px;
           
        }

        h1 {
            color: #83A2FF;
        }
       label {
        background-color: #83A2FF;
       }
</style>
<body>
    <h1>Form Pengadaan Barang</h1>
    <form method="post" action="proses_pengadaan.php">
        <label for="id_barang">ID Barang:</label>
        <input type="text" name="id_barang" required><br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required><br>

        <label for="harga_beli">Harga Beli:</label>
        <input type="text" name="harga_beli" required><br>

        <input type="submit" name="submit" value="Tambah Pengadaan">
    </form>
</body>
</html>