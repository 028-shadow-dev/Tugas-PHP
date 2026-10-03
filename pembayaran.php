<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Pembayaran Barang</label>
        <label for="namaBarang">Nama barang</label>
        <input type="text" name="nama" id="">
        <br>
        <label for="namaBarang">Harga satuan</label>
        <input type="number" name="Barang" id="">
        <br>
        <label for="namaBarang">Jumlah pembelian</label>
        <input type="number" name="JumlahPembelian" id="">
        <br>
        <button type="submit">Kirim</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['nama'])) {
                $nama = $_POST['nama'];
            }
            if (isset($_POST['Barang'])) {
                $hargaBarang = $_POST['Barang'];
            }
            if (isset($_POST['JumlahPembelian'])) {
                $JumlahPembelian = $_POST['JumlahPembelian']; 
            }
            $totalHarga = $hargaBarang * $JumlahPembelian;
            if ($totalHarga >= 500000) {
                $diskon = 0.2;
            } else if($totalHarga >= 250000) {
                $diskon = 0.1;
            } else {
                $diskon = 0;
            }
            $HargaDenganDiskon = $totalHarga * (1 - $diskon);
    ?>
    <div>
        <h1><b>Pembayaran</b></h1>
        <p>Nama Barang: <?= $nama ?></p>
        <p>harga satuan: Rp<?= $hargaBarang ?></p>
        <p>jumlah pembelian: <?= $JumlahPembelian ?></p>
        <p>Diskon: <?= $diskon * 100?>%</p>
        <p>Harga Kotor: <?= $totalHarga ?></p>
        <p>Total Harga + diskon: <?= $HargaDenganDiskon ?></p><br>
    </div>
    <?php 
    }
    ?>
</body>
</html>
