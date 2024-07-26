<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "toko_buku");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Fungsi untuk menambah buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tambah_buku"])) {
    $id_buku = $_POST["id_buku"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];

    $query_tambah = "INSERT INTO tabel_buku (id_buku, kategori, nama_buku, harga, stok, penerbit) VALUES ('$id_buku', '$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')";
    $result_tambah = $koneksi->query($query_tambah);
}

// Fungsi untuk mengubah buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_buku"])) {
    $id_buku = $_POST["id_buku"];
    $kategori = $_POST["kategori"];
    $nama_buku = $_POST["nama_buku"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $penerbit = $_POST["penerbit"];

    $query_edit = "UPDATE tabel_buku SET kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', penerbit='$penerbit' WHERE id_buku=$id_buku";
    $result_edit = $koneksi->query($query_edit);
}

// Fungsi untuk menghapus buku
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hapus_buku'])) {
    $id_buku_hapus = $_POST['id_buku'];

    $query_hapus = "DELETE FROM tabel_buku WHERE id_buku = ?";
    $stmt_hapus = $koneksi->prepare($query_hapus);

    if ($stmt_hapus) {
        $stmt_hapus->bind_param("i", $id_buku_hapus);
        $stmt_hapus->execute();

        // Periksa apakah execute() berhasil
        if ($stmt_hapus->affected_rows > 0) {
            echo "Berhasil menghapus buku.";
        } else {
            echo "Gagal menghapus buku: " . $stmt_hapus->error;
        }

        // Tutup statement setelah digunakan
        $stmt_hapus->close();
    } else {
        echo "Gagal menghapus buku: " . $koneksi->error;
    }
}
// Ambil data buku dari database
$query_buku = "SELECT * FROM tabel_buku";
$result_buku = $koneksi->query($query_buku);

// Ambil data penerbit dari database
$query_penerbit = "SELECT * FROM tabel_penerbit";
$result_penerbit = $koneksi->query($query_penerbit);



?>


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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <!-- Form Tambah Buku -->
    <form method="post" action="">
        id buku: <input type="text" name="id_buku" required><br>
        Kategori: <input type="text" name="kategori" required><br>
        Nama Buku: <input type="text" name="nama_buku" required><br>
        Harga: <input type="text" name="harga" required><br>
        Stok: <input type="text" name="stok" required><br>
        Penerbit: <input type="text" name="penerbit" required><br>
        <input type="submit" name="tambah_buku" value="Tambah Buku">
    </form>

    <!-- Tabel Daftar Buku -->
    <table border="1">
        <tr>
            <th>Id Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($row_buku = $result_buku->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row_buku['id_buku']}</td>";
            echo "<td>{$row_buku['kategori']}</td>";
            echo "<td>{$row_buku['nama_buku']}</td>";
            echo "<td>{$row_buku['harga']}</td>";
            echo "<td>{$row_buku['stok']}</td>";
            echo "<td>{$row_buku['penerbit']}</td>";
            echo "<td>
            <form method='post' action=''>
                <input type='hidden' name='id_buku' value='{$row_buku['id_buku']}'>
                <button type='submit' name='hapus_buku'>Hapus</button>
                <button type='submit' name='edit_buku'>Edit</button>
            </form>
          </td>";
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

<?php
// Tutup koneksi ke database
$koneksi->close();
?>