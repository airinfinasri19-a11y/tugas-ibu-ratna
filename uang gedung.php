<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Ulang SMK "Pasti Bisa"</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 15px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .hasil {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin: 20px auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<h2>Pendaftaran Ulang SMK "Pasti Bisa"</h2>

<form method="post" action="">
    <label>Nama Siswa:</label>
    <input type="text" name="nama" required>

    <label>Nomor Induk:</label>
    <input type="text" name="no_induk" required>

    <label>Kelas:</label>
    <select name="kelas" required>
        <option value="">-- Pilih Kelas --</option>
        <option value="1">Kelas 1</option>
        <option value="2">Kelas 2</option>
        <option value="3">Kelas 3</option>
    </select>

    <input type="submit" name="hitung" value="Hitung Biaya">
</form>

<?php
// Jika tombol "Hitung Biaya" diklik
if (isset($_POST['hitung'])) {
    $nama = $_POST['nama'];
    $no_induk = $_POST['no_induk'];
    $kelas = $_POST['kelas'];

    // ==========================
    // Struktur SWITCH - CASE
    // ==========================
    switch ($kelas) {
        case '1':
            // CASE KELAS x
            $uang_gedung = 800000;
            $spp = 90000;
            $seragam = 125000;
            break;

        case '2':
            // CASE KELAS xi
            $uang_gedung = 500000;
            $spp = 75000;
            $seragam = 100000;
            break;

        case '3':
            // CASE KELAS xii
            $uang_gedung = 500000;
            $spp = 75000;
            $seragam = 100000;
            break;

        default:
            // ELSE / CASE DEFAULT
            $uang_gedung = 0;
            $spp = 0;
            $seragam = 0;
            echo "<div class='hasil'><b>Kelas tidak valid!</b></div>";
            exit;
    }

    // Hitung total biaya
    $total = $uang_gedung + $spp + $seragam;

    // ==========================
    // Output hasil perhitungan
    // ==========================
    echo "<div class='hasil'>";
    echo "<h3>Rincian Biaya Pendaftaran Ulang</h3>";
    echo "Nama Siswa : <b>$nama</b><br>";
    echo "Nomor Induk : <b>$no_induk</b><br>";
    echo "Kelas : <b>$kelas</b><br><hr>";
    echo "Uang Gedung : Rp " . number_format($uang_gedung, 0, ',', '.') . "<br>";
    echo "SPP Bulan Juli : Rp " . number_format($spp, 0, ',', '.') . "<br>";
    echo "Seragam : Rp " . number_format($seragam, 0, ',', '.') . "<br>";
    echo "<hr><b>Total Bayar : Rp " . number_format($total, 0, ',', '.') . "</b>";
    echo "</div>";
}
?>

</body>
</html>