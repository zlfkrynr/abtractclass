<?php
require_once 'abstract.php';
require_once 'persegipanjang.php';
require_once 'lingkaran.php';
require_once 'segitiga.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    tr td {
        padding: 10px;
    }
    .Judul td {
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }
</style>
<body>
    <br><br>
    <table border=1>
        <tr class="Judul">
            <td >No</td>
            <td>Nama Bidang</td>
            <td>Keterangan</td>
            <td>Luas Bidang</td>
            <td>Keliling Bidang</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php $l1 = new Lingkaran (3); $l1 -> namaBidang(); ?></td>
            <td>Rumus L = π × r × r<br> Rumus K = 2 x 22/7 x r</td>
            <td><?php $l1 = new Lingkaran (3);  echo'Luas = ' .$l1 -> luasBidang(); ?></td>
            <td><?php $l1 = new Lingkaran (3);  echo'Keliling = ' .$l1 -> kelilingBidang(); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php $pp1 = new PersegiPanjang (2, 5); $pp1 -> namaBidang(); ?></td>
            <td>Rumus L = P X L<br> Rumus K = 2 (P + L)</td>
            <td><?php $pp1 = new PersegiPanjang (2, 5);  echo'Luas = ' .$pp1 -> luasBidang(); ?></td>
            <td><?php $pp1 = new PersegiPanjang (2, 5);  echo'Keliling = ' .$pp1 -> kelilingBidang(); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php $s1 = new Segitiga (2, 5); $s1 -> namaBidang(); ?></td>
            <td>Rumus L =  1/2 x Alas x Tinggi <br> Rumus K = Sisi A + Sisi B + Sisi C</td>
            <td><?php $s1 = new Segitiga (2, 5);  echo'Luas = ' .$s1 -> luasBidang(); ?></td>
            <td><?php $s1 = new Segitiga (2, 5); $s1 -> setSisiABC(10, 13, 18); echo'Keliling = ' .$s1 -> kelilingBidang(); ?></td>
        </tr>
    </table>
</body>
</html>
