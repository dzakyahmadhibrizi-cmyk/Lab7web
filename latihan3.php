<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];
?>
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Latihan 3</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<?php
echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
echo "<p>Jumlah mahasiswa: " . count($mahasiswa) . "</p>";
?>
</body></html>
