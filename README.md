# Lab7Web_PHP — Praktikum 7: Pemrograman Server-Side dengan PHP

**Nama:** (isi nama)  **NIM:** (isi NIM)  **Kelas:** (isi kelas)

## Tujuan
Memahami pemrosesan server-side dengan PHP: sintaks, variabel, function, pemrosesan form (GET/POST),
validasi dan sanitasi input, serta membangun aplikasi sederhana penerima data.

## Perangkat
Laptop/PC, web browser, Visual Studio Code, PHP 8.x, XAMPP/Laragon (Apache).

## Cara Menjalankan
1. Jalankan Apache dari XAMPP/Laragon.
2. Salin folder ini ke `htdocs/` (XAMPP) atau `www/` (Laragon), mis. `htdocs/lab7_php`.
3. Buka `http://localhost/lab7_php/` di browser (jangan klik ganda file PHP).

## Struktur File
| File | Keterangan |
|---|---|
| index.php | Menu navigasi |
| latihan1.php | Menjalankan PHP, waktu server |
| latihan2.php | Variabel, operator, percabangan (nilai akhir & predikat) |
| latihan3.php | Perulangan foreach dan array |
| latihan4.php | Function (diskon, luas, kelulusan) |
| latihan5.php | Form GET |
| latihan6.php | Form POST |
| latihan7.php | Subtotal transaksi dengan validasi |
| mini_project.php | Formulir Data Mahasiswa (validasi server-side) |
| eksperimen.php | Eksperimen mandiri 1–5 |
| style.css | Gaya tampilan |
| screenshots/ | Tangkapan layar hasil |

## Ringkasan Hasil
- Latihan 1: PHP dieksekusi server, browser hanya menerima HTML.
- Latihan 2: Nilai akhir Siti = 85×0,3 + 78×0,3 + 90×0,4 = 84,90 → predikat B.
- Latihan 3–4: array ditampilkan dengan foreach; function menghitung diskon, luas, kelulusan.
- Latihan 5–6: data diterima lewat GET (tampak di URL) dan POST (body request), ditampilkan dengan `htmlspecialchars()`.
- Latihan 7: subtotal dihitung setelah validasi harga dan jumlah.
- Mini project: validasi wajib isi, NIM 10 digit angka, semester 1–14, format email.

## Hasil Screenshot

**Menu utama**

![Menu](screenshots/00_menu.png)

**Latihan 1 — Menjalankan PHP** (kode PHP tidak tampil sebagai teks; browser hanya menerima hasil HTML)

![Latihan 1](screenshots/latihan1.png)

**Latihan 2 — Variabel, operator, percabangan** (nilai akhir Siti 84,90 → predikat B, beserta tabel uji kombinasi nilai)

![Latihan 2](screenshots/latihan2.png)

**Latihan 3 — Perulangan dan array** (7 nama ditampilkan dengan foreach)

![Latihan 3](screenshots/latihan3.png)

**Latihan 4 — Function**

![Latihan 4](screenshots/latihan4.png)

**Latihan 5 — Form GET.** Sebelum submit, URL belum memiliki parameter. Setelah submit, data terkirim lewat URL (`?kata=budi`) dan dibaca dengan `$_GET`.

![Latihan 5 sebelum](screenshots/latihan5_sebelum.png)
![Latihan 5 sesudah](screenshots/latihan5_sesudah.png)

**Latihan 6 — Form POST.** Data diterima tanpa muncul di URL.

![Latihan 6](screenshots/latihan6.png)

**Latihan 7 — Pengolahan data sederhana** (Kopi Rp5.000 × 3 = Rp15.000)

![Latihan 7](screenshots/latihan7.png)

**Mini Project — Data valid** (ringkasan data mahasiswa tampil)

![Mini Project valid](screenshots/mini_project_valid.png)

**Eksperimen Mandiri — Pencarian nama (GET).** Kata "Budi" tidak ada di array sehingga hasilnya "Tidak ditemukan"; kata "Alya" ditemukan.

![Eksperimen tidak ditemukan](screenshots/eksperimen_tidak_ditemukan.png)
![Eksperimen ditemukan](screenshots/eksperimen_ditemukan.png)

## Kasus Uji Mini Project
**Valid**
1. Nama: Andi, NIM: 2024010001, Prodi: Teknik Informatika, Semester: 3, Email: andi@mail.com → ringkasan data tampil.
2. Nama: Siti, NIM: 2023020045, Prodi: Sistem Informasi, Semester: 14, Email: siti@kampus.ac.id → ringkasan tampil.

**Tidak valid**
1. Semua kolom kosong → muncul seluruh pesan error.
2. NIM "12AB", Semester "15", Email "andi@" → error NIM, semester, dan email.

Input `<script>alert(1)</script>` ditampilkan sebagai teks biasa berkat `htmlspecialchars()`.

## Jawaban Pertanyaan Evaluasi
1. **Client-side vs server-side:** client-side dijalankan di browser (HTML, CSS, JavaScript); server-side dijalankan di server (mis. PHP), yang memproses request dan mengirim hasil (HTML) ke browser.
2. **Mengapa lewat web server:** browser tidak bisa mengeksekusi PHP. Web server (dengan interpreter PHP) mengeksekusi kodenya dan mengirim output; bila dibuka langsung (file://), kode tampil mentah atau tidak jalan.
3. **Fungsi `$`:** penanda bahwa identifier adalah variabel PHP.
4. **GET vs POST:** GET mengirim data lewat URL (terlihat, terbatas, cocok untuk pencarian/permintaan yang tidak mengubah data); POST mengirim lewat body request (tidak tampil di URL, lazim untuk form). POST bukan enkripsi; gunakan HTTPS.
5. **Validasi server-side:** validasi di browser mudah dilewati/dimanipulasi, sehingga server harus memeriksa ulang demi keamanan dan integritas data.
6. **`htmlspecialchars()`:** mengubah karakter khusus HTML (`< > & " '`) menjadi entitas sehingga input tidak dieksekusi sebagai HTML/script (mencegah XSS).
7. **Manfaat function:** kode dapat dipakai ulang, lebih rapi, mudah dipelihara dan diuji, serta mengurangi duplikasi.

## Eksperimen Mandiri
Semua ada di `eksperimen.php` dan `mini_project.php`. Perbedaan tombol Reset: reset hanya mengosongkan isian di browser tanpa request ke server, sedangkan pemrosesan ulang mengirim data lagi ke server untuk divalidasi dan diproses.
