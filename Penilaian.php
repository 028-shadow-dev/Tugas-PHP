<!DOCTYPE html>
<html lang="en">
<head>
    1
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    <?php 
    $nama = "Rakha";
    $kelas = "XI RPL 1";
    $nilai = 75;
    $nilaiUTS = 80;
    $nilaiUAS = 80;

    $nilaiTotal = ($nilai*0.30)+($nilaiUTS*0.30)+($nilaiUAS*0.40);

    if ($nilaiTotal >= 90) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilaiTotal >= 80) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilaiTotal >= 75) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilaiTotal >= 60) {
        $predikat = "D";    
        $status = "TIDAK Lulus";
    } else {
        $predikat = "E";
        $status = "TIDAK Lulus";
    }
    ?>

    Nama: <?php echo $nama; ?><br>
    Kelas: <?php echo $kelas; ?><br>
    <hr>
    Nilai Tugas: <?php echo $nilai; ?><br>
    Nilai UTS: <?php echo $nilaiUTS; ?><br>
    Nilai UAS: <?php echo $nilaiUAS; ?><br>
    <hr>
    Nilai Total: <?php echo $nilaiTotal; ?><br>
    Predikat: <?php echo $predikat; ?><br>
    Status: <?php echo $status; ?><br>
</body>
</html>
