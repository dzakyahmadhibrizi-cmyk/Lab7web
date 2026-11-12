<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
}
function tentukanPredikat($nilai) {
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 75) return "B";
    elseif ($nilai >= 60) return "C";
    return "D";
}

$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;
$nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
$predikat = tentukanPredikat($nilaiAkhir);

// Beberapa kombinasi uji
$uji = [[100,100,100],[85,78,90],[70,70,70],[60,60,60],[40,50,30]];
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Latihan 2</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<h2>Latihan 2 - Variabel, Operator, Percabangan</h2>
<?php
echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
echo "Predikat: " . $predikat;
?>
<h3>Uji Kombinasi Nilai</h3>
<table>
<tr><th>Tugas</th><th>UTS</th><th>UAS</th><th>Nilai Akhir</th><th>Predikat</th></tr>
<?php foreach ($uji as [$t, $u, $a]):
    $n = hitungNilaiAkhir($t, $u, $a); ?>
<tr><td><?= $t ?></td><td><?= $u ?></td><td><?= $a ?></td>
<td><?= number_format($n, 2) ?></td><td><?= tentukanPredikat($n) ?></td></tr>
<?php endforeach; ?>
</table>
</body></html>
