<html>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <h2 align="center">Selamat Datang di Bukutamu </h2>
    <div align="center">
        <tr>
            <td><a href="login.php">login</a></td>
            <td> | </td>
            <td><a href="input_user.php">Input User</a></td>
        </tr>
    </div>
    <p>
        <?php
        include"config.php";
        // banyaknya baris yang tampil perhalaman
        $rowsPerPage = 5;
        //muncul pertama secara default
        $pageNum = 1;

        // jika $_GET ['page'] didefinisikan, gunakan sebagai nomor halamanppll;
        if (isset($_GET['page'])) {
            $pageNum = $_GET['page'];
        }

        // menghitung offset
        $offset = ($pageNum - 1) * $rowsperpage;
        $query = "SELECT * FROM pengunjung ORDER  BY 'id' DESC LIMIT $offset, $rowsPerPage";
        $result = mysqli_query($conn, $query) or die('Error, query failed 1');

        // jumlah total
        $query1 ="SELECT COUNT(id) AS numrows FROM pengunjung";
        $result1 = mysqli_query($conn, $query1) or die('Error, query failed 2');
        $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $numrows =$row1['numrows'];
        echo "Total nomor bukutamu : $nummrows";
        ?>
    </p>

    <?php
    $no = 1;
    while ($hasil = mysqli_fetch_array($result)) {
        ?>
        <table width="99%" border="0" align="center" cellpadding="2" cellspacing="0" class="content">
            <tr valign="top">
                <td bgcolor="#ffbfaa"><span class="style2">dari
                    <?php echo $hasil['nama']; ?> pada
                    <?php echo $hasil['date']; ?>
                </span></td>
    }