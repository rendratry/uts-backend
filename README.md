# UTS Mata Kuliah Pemrogaman Backend

Silakan Dikerjakan Masing - masing individu.

## Persiapan

Perhatikan langkah - langkah sebelum mengerjakan UTS

Download/ clone project ini
Buka project dan jalankan perintah `composer install` dan `composer update`
Buat Database Localhost Dengan Nama `kuis-backend`

Setelah Selesai Membuat Database Jalankan Perintah `php spark migrate` di Terminal Project.
Pastikan perintah Migrate Berhasil.

Jika Berhasil Maka Akan Dibuatkan Tabel Secara Otomatis di Dalam Database.


## Soal

1. Buat Fungsi `CREATE` atau fungsi untuk menambahkan Todo List.
2. Buat Fungsi `EDIT` untuk mengubah informasi acara (acara dan deadline)
2. Buat Fungsi `SELESAI` Ketika Klik Selesai Maka Status Akan berubah Menjadi `SELESAI` (Defaultnya `BELUM SELESAI`) di Tabel Todo List.
3. Buat Fungsi `DELETE` untuk menghapus todolist dari tabel
4. Buat Fungsi `RESTORE` untuk mengembalikan status dari `SELESAI` ke `BELUM SELESAI`

Aturan :
Todo/ Acara yang statusnya `BELUM SELESAI` akan tampil di tabel atas/ Todo, jika Acara diubah statusnya menjadi `SELESAI` maka akan berpindah ke tabel bawah di tabel Complete begitu pula sebaliknya jika di `RESTORE` maka akan kembali ke tabel atas.

## Hasil
![Hasil Jadi](https://github.com/rendratry/kuis-2/blob/main/todolist-2.png)