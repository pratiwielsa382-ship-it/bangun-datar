<?php
class BangunDatar {
    // Persegi
    public function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
    public function kelilingPersegi($sisi) {
        return 4 * $sisi;
    }

    // Persegi panjang
    public function luasPersegiPanjang($p, $l) {
        return $p * $l;
    }
    public function kelilingPersegiPanjang($p, $l) {
        return 2 * ($p + $l);
    }

    // Segitiga
    public function luasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Lingkaran
    public function luasLingkaran($r) {
        return pi() * $r * $r;
    }
    public function kelilingLingkaran($r) {
        return 2 * pi() * $r;
    }
}

$bd = new BangunDatar();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menghitung Bangun Datar</title>
</head>
<body>
    <h1>Menghitung Bangun Datar</h1>
    <?php
    echo "Luas persegi (sisi 5): " . $bd->luasPersegi(5) . "<br>";
    echo "Keliling persegi (sisi 5): " . $bd->kelilingPersegi(5) . "<br>";
    echo "Luas persegi panjang (8 x 4): " . $bd->luasPersegiPanjang(8, 4) . "<br>";
    echo "Keliling persegi panjang (8 x 4): " . $bd->kelilingPersegiPanjang(8, 4) . "<br>";
    echo "Luas segitiga (alas 6, tinggi 3): " . $bd->luasSegitiga(6, 3) . "<br>";
    echo "Luas lingkaran (r = 7): " . round($bd->luasLingkaran(7), 2) . "<br>";
    echo "Keliling lingkaran (r = 7): " . round($bd->kelilingLingkaran(7), 2) . "<br>";
    ?>
</body>
</html>
