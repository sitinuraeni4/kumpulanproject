<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "toko_buku");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses data pengadaan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id_barang = $_POST["id_barang"];
    $jumlah = $_POST["jumlah"];
    $harga_beli = $_POST["harga_beli"];
    $tanggal = date("Y-m-d"); // Tanggal sekarang

    // Simpan data pengadaan ke database
    $query = "INSERT INTO tabel_pengadaan (id_barang, jumlah, harga_beli, tanggal) VALUES ('$id_barang', '$jumlah', '$harga_beli', '$tanggal')";
    
    if ($koneksi->query($query) === TRUE) {
        echo "Pengadaan berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

// Tutup koneksi ke database
$koneksi->close();
?>
