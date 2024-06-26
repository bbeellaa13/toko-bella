<DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="menu.css">
        <link rel="stylesheet" href="home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Read Penjualan</title>
    </head>

    <body>
        <?php include "menu.php"; ?>

        <?php


        require "koneksi.php";


        $id = $_GET["id"];


        $sql = "SELECT penjualan.id, barang.nama as nama_barang, penjualan.jumlah, penjualan.total_harga, user.username, penjualan.created_at FROM barang JOIN penjualan on barang.id = penjualan.id_barang JOIN user ON user.id = penjualan.id_staff WHERE penjualan.id = '$id'";
        $query = mysqli_query($koneksi, $sql);
        $penjualan = mysqli_fetch_array($query);
        ?>

        <div>
            <h1>Lihat Penjualan</h1>
            <table>
                <tr>
                    <td>Nama barang</td>
                    <td><input readonly type="text" value="<?= $penjualan["nama_barang"] ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input readonly type="text" value="<?= $penjualan["jumlah"] ?>"></td>
                </tr>
                <tr>
                    <td>Total harga</td>
                    <td><input readonly type="text" value="<?= $penjualan["total_harga"] ?>"></td>
                </tr>
                <tr>
                    <td>Diinput oleh</td>
                    <td><input readonly type="text" value="<?= $penjualan["username"] ?>"></td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td><input readonly type="text" value="<?= $penjualan["created_at"] ?>"></td>
                </tr>
            </table>
        </div>
    </body>

    </html>