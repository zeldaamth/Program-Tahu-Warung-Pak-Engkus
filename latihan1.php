<!DOCTYPE html>
<html>
    <body>
        <h1> Program Warung Pak Engkus </h1> <br>
        <h2>Selamat Datang di Warung Pak Engkus </h2>
        <form method="POST">
          <table>
            <tr>
                <td>Jumlah Tahu: </td>
                <td><input type="number" name="jumlahTahu"></td>
            </tr>
            <tr>
                <td> Ukuran Tahu </td>
                <td><input type="number" name="ukuranTahu"></td>
            </tr>
            <tr>
                <td><input type="submit" name="Pesan"></td>
    </tr>
</table>
</form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jumlahTahu = $_POST['jumlahTahu'];
        $ukuranTahu = $_POST['ukuranTahu'];
        $hargaPerUkuran = 125; //harga per ukuran tahu = Rp. 125

        for ($i = 1; $i <= $jumlahTahu; $i++) {
            for ($j = 1; $j <= $ukuranTahu; $j++) {
                echo "**<br>";
            }
            $hargaTahu = $ukuranTahu * $hargaPerUkuran;
            echo "Tahu Rp. " . number_format($hargaTahu, 0, ',', '.') . "<br><br>";
        }
        // Hitung total harga Tahu
        $totalHarga = $jumlahTahu * ($hargaPerUkuran * $ukuranTahu);
        echo "Harga total tahu adalah Rp. " . number_format($totalHarga, 0, ',', '.') . "<br>";
    }
    ?>

</body>
</html>



