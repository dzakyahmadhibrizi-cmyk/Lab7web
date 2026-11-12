<?php
function formatRupiah($angka) {
    return "Rp" . number_format((float)$angka, 0, ",", ".");
}
function rataRata($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

// 2. Pencarian nama di array (GET)
$dataNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita", "Bimo"];
$kata = trim($_GET["kata"] ?? "");
$hasil = [];
if ($kata !== "") {
    foreach ($dataNama as $n) {
        if (stripos($n, $kata) !== false) $hasil[] = $n;
    }
}
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Eksperimen Mandiri</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<h2>Eksperimen Mandiri</h2>

<h3>1. Rata-rata tiga nilai (80, 75, 90)</h3>
<p><?= number_format(rataRata(80, 75, 90), 2) ?></p>

<h3>2. Cari nama (GET)</h3>
<form method="GET">
 <label for="kata">Nama:</label>
 <input id="kata" name="kata" value="<?= htmlspecialchars($kata, ENT_QUOTES, "UTF-8") ?>">
 <button type="submit">Cari</button>
</form>
<?php if ($kata !== ""): ?>
 <?php if ($hasil): ?>
  <ul><?php foreach ($hasil as $h): ?><li><?= htmlspecialchars($h) ?></li><?php endforeach; ?></ul>
 <?php else: ?><p>Tidak ditemukan.</p><?php endif; ?>
<?php endif; ?>

<h3>3. Format Rupiah</h3>
<p><?= formatRupiah(1250000) ?></p>

<h3>4. Validasi NIM</h3>
<p>Diterapkan di <a href="mini_project.php">mini_project.php</a>: NIM wajib 10 digit angka.</p>

<h3>5. Tombol Reset</h3>
<p>Lihat tombol Reset di <a href="mini_project.php">mini_project.php</a>. Reset hanya mengosongkan
isian form di browser (client-side) tanpa mengirim permintaan ke server, sedangkan
pemrosesan ulang mengirim data kembali ke server untuk divalidasi dan diproses lagi.</p>
</body></html>
