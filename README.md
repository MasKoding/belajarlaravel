# TUGAS 
1. Buatlah halaman yang menampilkan 5 destinasi wisata dengan membuat folder wisata
2. Halaman nya yaitu home,about, contact
3. Buat file controller WisataController dan Konfigurasi dalam routes/web.php
```
 php artisan make:controller WisataController
```
atur routes/web.php  seperti contoh
```
    Route::get('/wisata/index',[WisataController::class,'index']);
```
4. Buat view pada resources/views
  * index.blade.php menampilkan card wisata
  * tentang.blade.php menampilkan informasi pembuat web berupa nama dan kelas
  * kontak.blade.php menampilkan alamat dengan embed google map 
     - Cara embed google map yaitu buka google map
     -  cari lokasi
     - Klik bagikan atau share
     - Klik Sematkan atau Embed
     - Copy paster code iframe dari google dan letakkan di file kontak
4. Buat data array 2 dimensi dengan sample sebanyak 5 data seperti dibawah:
 
 
 ```php
  $data = [
    [
        'nama_wisata'=>'cari sendiri yaa :P',
        'tempat_wisata'=>'cari sendiri yaa :P',
        'harga'=>'100k',
        'alamat'=>'',
        'video'=>'ambil dari youtube ya ']
    ]

 ```