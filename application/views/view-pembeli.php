<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>

    <!-- Load file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Load file library jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Load file library Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Load file library JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">

        <h2>Data Pembeli</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No Pembeli</th>
                    <th>Nama Pembeli</th>
                    <th>No HP</th>
                    <th>Merk Sepatu</th>
                    <th>Harga</th>
                    <th>Ukuran Sepatu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                foreach ($hasil as $item) {

                ?>

                <tr>
                    <td><?php echo $item->no_pembeli ?></td>
                    <td><?php echo $item->nama_pembeli ?></td>
                    <td><?php echo $item->no_hp ?></td>
                    <td><?php echo $item->merk ?></td>
                    <td><?php echo $item->harga ?></td>
                    <td><?php echo $item->ukuran ?></td>
                </tr>
                <?php

                    $no++;
                }

                ?>
            </tbody>
        </table>
        <a href="<?php echo base_url() ?>pembelian/tambah" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>

</html>