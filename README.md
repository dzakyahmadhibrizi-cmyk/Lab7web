# Lab7Web_PHP — Praktikum 7: Pemrograman Server-Side dengan PHP

**Nama:** (Dzaky Ahmad Hibrizi)  **NIM:** (312510471)  **Kelas:** (I251D)

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

(<img width="959" height="502" alt="Screenshot 2026-11-12 105008" src="https://github.com/user-attachments/assets/f3215203-de9e-4527-92fc-49457b0dbf71" />
)

**Latihan 1 — Menjalankan PHP** (kode PHP tidak tampil sebagai teks; browser hanya menerima hasil HTML)

(<img width="235" height="134" alt="Screenshot 2026-11-12 105021" src="https://github.com/user-attachments/assets/15d23929-24fd-41c1-a355-b7edba5cb250" />
)

**Latihan 2 — Variabel, operator, percabangan** (nilai akhir Siti 84,90 → predikat B, beserta tabel uji kombinasi nilai)

(<img width="622" height="375" alt="Screenshot 2026-11-12 105034" src="https://github.com/user-attachments/assets/1a18ea27-a898-4a95-9252-55acbd19ed53" />
)

**Latihan 3 — Perulangan dan array** (7 nama ditampilkan dengan foreach)

(<img width="505" height="279" alt="Screenshot 2026-11-12 105045" src="https://github.com/user-attachments/assets/940e3347-7bbb-4924-a2a5-a9468cc97b35" />
)

**Latihan 4 — Function**

(<img width="473" height="192" alt="Screenshot 2026-11-12 105114" src="https://github.com/user-attachments/assets/70932991-459d-4193-afcb-a8c81889a0a0" />
)

**Latihan 5 — Form GET.** Sebelum submit, URL belum memiliki parameter. Setelah submit, data terkirim lewat URL (`?kata=budi`) dan dibaca dengan `$_GET`.

(<img width="683" height="221" alt="Screenshot 2026-11-12 105341" src="https://github.com/user-attachments/assets/d5e9c539-02b6-49c5-adba-ea1d9e445bee" />
)
(<img width="646" height="270" alt="Screenshot 2026-11-12 105352" src="https://github.com/user-attachments/assets/7be8bb71-370c-4457-8f72-c35461fedf27" />
)

**Latihan 6 — Form POST.** Data diterima tanpa muncul di URL.

(<img width="563" height="318" alt="Screenshot 2026-11-12 105648" src="https://github.com/user-attachments/assets/a8259e0d-2eda-4104-9f99-85f2cd2be039" />
)

**Latihan 7 — Pengolahan data sederhana** (Kopi Rp5.000 × 3 = Rp15.000)

(<img width="767" height="371" alt="Screenshot 2026-11-12 105808" src="https://github.com/user-attachments/assets/05216b96-176a-41d4-8b4e-9823a2414c6f" />
)

**Mini Project — Data valid** (ringkasan data mahasiswa tampil)

(<img width="596" height="467" alt="Screenshot 2026-11-12 105934" src="https://github.com/user-attachments/assets/3b1a72d6-5621-4912-8215-33fdfa5de4e2" />
)

**Eksperimen Mandiri — Pencarian nama (GET).** Kata "Budi" tidak ada di array sehingga hasilnya "Tidak ditemukan"; kata "Alya" ditemukan.

(<img width="683" height="333" alt="Screenshot 2026-11-12 110036" src="https://github.com/user-attachments/assets/577ccaef-1810-4d48-b8ec-a87772c6cd7c" />
)
(<img width="664" height="470" alt="Screenshot 2026-11-12 110256" src="https://github.com/user-attachments/assets/3d90df90-8806-4534-9765-8cd6faa7ecbb" />
)

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
