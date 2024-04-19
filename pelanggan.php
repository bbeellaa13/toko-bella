<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>pelanggan</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <?php


    require "koneksi.php";


    $sql = "SELECT * FROM pelanggan";
    $query = mysqli_query($koneksi, $sql);
    ?>

    <div class="container">
        <h1 class="mt-5 mb-4">Data Pelanggan</h1>
        <form action="new-pelanggan.php" method="GET">
            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No_Telepon</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php while ($barang = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $pelanggan["nama"] ?></td>
                            <td><?= $pelanggan["alamat"] ?></td>
                            <td><?= $pelanggan["no_telepon"] ?></td>
                            <td><?= $pelanggan["created_at"] ?></td>
                            <td><?= $pelanggan["updated_at"] ?></td>
                            <td>
                                <form action="read-pelanggan.php" method="GET">
                                    <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                                    <button type="submit">Lihat</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete-pelanggan.php" method="POST" onsubmit="return konfirmasi(this)">
                                    <input type="hidden" name="id" value='<?= $pelanggan["id"] ?>'>
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
        <script>
            function konfirmasi(form) {
                formData = new FormData(form);
                id = formData.get("id");
                return confirm(`Hapus pelanggan '${id}'?`);
            }
        </script>
</body>

</html>