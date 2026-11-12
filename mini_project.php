<?php
// ===== BAGIAN PEMROSESAN =====
$data = null;
$error = [];
$nama = $nim = $prodi = $email = $semesterInput = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 10) {
        $error[] = "NIM harus berupa 10 digit angka.";
    }
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit($semesterInput) ||
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

function e($teks) {
    return htmlspecialchars((string)$teks, ENT_QUOTES, "UTF-8");
}
?>
<!-- ===== BAGIAN TAMPILAN ===== -->
<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><title>Mini Project</title>
<link rel="stylesheet" href="style.css"></head>
<body>
<h2>Formulir Data Mahasiswa</h2>

<?php if ($error): ?>
 <div class="error"><strong>Terdapat kesalahan:</strong>
  <ul><?php foreach ($error as $pesan): ?><li><?= e($pesan) ?></li><?php endforeach; ?></ul>
 </div>
<?php endif; ?>

<?php if ($data): ?>
 <div class="ok"><h3>Data Berhasil Diterima</h3>
 <table>
  <tr><th>Nama</th><td><?= e($data["nama"]) ?></td></tr>
  <tr><th>NIM</th><td><?= e($data["nim"]) ?></td></tr>
  <tr><th>Program Studi</th><td><?= e($data["prodi"]) ?></td></tr>
  <tr><th>Semester</th><td><?= e($data["semester"]) ?></td></tr>
  <tr><th>Email</th><td><?= e($data["email"]) ?></td></tr>
 </table></div>
<?php endif; ?>

<form method="POST" action="">
 <label for="nama">Nama</label>
 <input id="nama" name="nama" value="<?= e($nama) ?>">
 <label for="nim">NIM (10 digit)</label>
 <input id="nim" name="nim" value="<?= e($nim) ?>">
 <label for="prodi">Program Studi</label>
 <input id="prodi" name="prodi" value="<?= e($prodi) ?>">
 <label for="semester">Semester (1–14)</label>
 <input id="semester" name="semester" value="<?= e($semesterInput) ?>">
 <label for="email">Email</label>
 <input id="email" name="email" value="<?= e($email) ?>">
 <br><button type="submit">Kirim</button>
 <button type="reset">Reset</button>
</form>
</body></html>
