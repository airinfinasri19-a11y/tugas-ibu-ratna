<html>
<head>
    <title>Hitung Biaya Sewa Mobil</title>
</head>
<body>
    <h2>Program Hitung Biaya Sewa Mobil</h2>
    <form method="post">
        <label>Pilih Jenis Mobil:</label>
        <select name="mobil">
            <option value="Avanza">Avanza</option>
            <option value="Xenia">Xenia</option>
            <option value="Innova">Innova</option>
            <option value="Alphard">Alphard</option>
            <option value="Fortuner">Fortuner</option>
        </select>
        <br><br>

        <label>Lama Sewa (hari):</label>
        <input type="number" name="lama" required>
        <br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $mobil = $_POST['mobil'];
        $lama = $_POST['lama'];

        switch ($mobil) {
            case "Avanza":
                $biayaSewa = 300000;
                $asuransi = 15000;
                break;
            case "Xenia":
                $biayaSewa = 300000;
                $asuransi = 15000;
                break;
            case "Innova":
                $biayaSewa = 500000;
                $asuransi = 25000;
                break;
            case "Alphard":
                $biayaSewa = 750000;
                $asuransi = 30000;
                break;
            case "Fortuner":
                $biayaSewa = 700000;
                $asuransi = 25000;
                break;
            default:
                $biayaSewa = 0;
                $asuransi = 0;
                break;
        }

        $total = ($biayaSewa + $asuransi) * $lama;

        echo "<h3>Hasil Perhitungan:</h3>";
        echo "Jenis Mobil: <b>$mobil</b><br>";
        echo "Biaya Sewa per Hari: Rp " . number_format($biayaSewa, 0, ',', '.') . "<br>";
        echo "Biaya Asuransi per Hari: Rp " . number_format($asuransi, 0, ',', '.') . "<br>";
        echo "Lama Sewa: $lama hari<br>";
        echo "<b>Total Bayar: Rp " . number_format($total, 0, ',', '.') . "</b>";
    }
    ?>
</body>
</html>