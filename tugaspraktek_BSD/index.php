<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "toko_buku");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Inisialisasi variabel pencarian
$cari_nama_buku = "";

// Ambil data buku dari database
$query = "SELECT * FROM tabel_buku";
$query1 = "SELECT * FROM tabel_penerbit";
$result = $koneksi->query($query);
$result_penerbit = $koneksi->query($query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
}

header {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.container {
    width: 80%;
    margin: 0 auto;
}

h1 {
    color: #427D9D;
    
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #427D9D;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #427D9D;
    color: #fff;
}

form {
    margin-top: 20px;
}

form input {
    margin-bottom: 10px;
    padding: 5px;
}

form input[type="submit"] {
    background-color: #427D9D;
    color: #fff;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #427D9D;
}

a {
    color: #427D9D;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>
<body>
    <h1>Daftar Buku</h1>

     <!-- Formulir Pencarian -->
     <form action="" method="GET">
        <label for="cari">Cari Nama Buku:</label>
        <input type="text" id="cari" name="cari" value="<?php echo $cari_nama_buku; ?>">
        <input type="submit" value="Cari">
    </form>

    <table border="1">
        <tr>
            <th>Id Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
        </tr>
        <?php
        // Tampilkan data buku
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id_buku']}</td>";
            echo "<td>{$row['kategori']}</td>";
            echo "<td>{$row['nama_buku']}</td>";
            echo "<td>{$row['harga']}</td>";
            echo "<td>{$row['stok']}</td>";
            echo "<td>{$row['penerbit']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

     <!-- Tabel Daftar Penerbit -->
     <h2>Daftar Penerbit</h2>
    <table border="1">
        <tr>
            <th>ID Penerbit</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Telepon</th>
        </tr>
        <?php
        while ($row = $result_penerbit->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id_penerbit']}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['alamat']}</td>";
            echo "<td>{$row['kota']}</td>";
            echo "<td>{$row['telepon']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
