<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     return "Hello World";
// });

// Route::get("/profile",function(){
//     $nama = ' Fazry Dwi Soewono';
//     $Tgl_Lahir = "06-Mei-2001";
//     return "Ini adalah halaman Profile saya" . $nama . " , Lahir Pada Tanggal" . $Tgl_Lahir;
// });

// Route::get('/profile',function(){
//     return view('profile');
// });

// Route::get('/Home',function(){
//     return view('Home');
// });

// Route::get('/', function(){
//     return view('Home');
// });

// Route::get('/profile', function(){
//     return view('profile');
// });

// Route::get('/Mahasiswa', function(){
//     return view('Mahasiswa');
// });

// Route::get('/About', function(){
//     return view('About');
// });

// Route::get('/tugaslorem', function(){
//     return view('tugaslorem');
// });
// Route::get('/perulangan', function(){
//     $nilai_awal = 1;
//     $mobil_rusak = 5;
//     $jumlah_mobil = 10;
//     while ($nilai_awal <= $jumlah_mobil) {
//         if ($nilai_awal > $mobil_rusak) {
//         echo "Mobil ke - " . $nilai_awal . ' TIDAK beroperasi dengan baik ! <br>';
//     } else {
//         echo "Mobil ke - " . $nilai_awal . ' Beroprasi dengan baik ! <br> ';
//     }
//     $nilai_awal++;
//     return view('pertemuan5 perulangan');
// }});

// Route::get('/Produk', function(){
//     return view('Produk');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('uts', function () {
    return view('uts');
});
Route::get('produk', function () {
    return view('produk');
});

route::get('/form', function () {
    $namap = ['Pilih Produk', 'Alat Tulis', 'elektronik', 'Sembako'];
    $jumlah = count($namap);

    return view('/form', compact('namap', 'jumlah'));
});

Route::get('/produk', function(){
    $kode_produk = ['BRG001' ,'BRG002',];
    $nama_produk = ['Pena', 'Buku'];
    $jenis_produk = ['Alat tulis','Alat tulis'];
    $harga = ['20000','15000'];
    $jumlah = count($kode_produk);
    return view('produk', compact('kode_produk', 'nama_produk','jenis_produk','harga','jumlah'));
});