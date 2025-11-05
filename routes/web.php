<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Tempat untuk mendefinisikan route aplikasi Laravel kamu.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Halaman Beranda 
Route::get('/', function () { 
    return view('beranda'); 
})->name('beranda'); 
 
// Halaman Login 
Route::get('/login', function () { 
    return view('login'); 
})->name('login'); 
 
// Proses Login 
Route::post('/login', function (Request $request) { 
    $username = $request->input('username'); 
    $password = $request->input('password'); 
 
    if ($username === 'admin' && $password === '12345') { 
        return redirect()->route('produk'); 
    } else { 
        return back()->with('error', 'Username atau Password salah!'); 
    } 
})->name('login.process'); 

// Halaman Produk Penjualan
Route::get('/produk', function () { 
    // (kode produk yang saya kasih)
})->name('produk');

// Halaman Detail Produk
Route::get('/produk/{id}', function ($id) { 
    // (kode detail produk yang saya kasih)
})->name('produk.detail');
 
// Halaman Produk Penjualan 
Route::get('/produk', function () { 
    $produk = [ 
        ['id' => 1, 'nama' => 'bego', 'harga' => 'Rp 8.500.000', 'foto' => 
        'images/begobadas.jpeg', 'deskripsi' => 'mainan bego proyek.'], 

        ['id' => 2, 'nama' => '4x4monster', 'harga' => 'Rp 4.200.000', 'foto' => 
        'images/4x4monster.jpeg', 'deskripsi' => 'mainan 4x4 monster.'], 

        ['id' => 3, 'nama' => 'beast car', 'harga' => 'Rp 6.750.000', 'foto' => 
        'images/supradrift.jpeg', 'deskripsi' => 'beast car.'], 

        // ✅ Produk baru ditambahkan
        ['id' => 4, 'nama' => 'RC Drift Supra.', 'harga' => 'Rp 5.300.000', 'foto' => 
        'images/supradrift.jpeg', 'deskripsi' => 'Mobil RC Drift Supra dengan kontrol presisi dan kecepatan tinggi.'],
    ]; 

    return view('produk', compact('produk')); 
})->name('produk'); 
 
// Halaman Detail Pembelian 
Route::get('/produk/{id}', function ($id) { 
    $produk = [ 
        1 => ['nama' => 'mainan bego', 'harga' => 'Rp 8.500.000', 'foto' => 
        'images/begobadas.jpeg', 'deskripsi' => 'bego proyek.'], 

        2 => ['nama' => '4x4monster', 'harga' => 'Rp 4.200.000', 'foto' => 
        'images/4x4monster.jpeg', 'deskripsi' => 'mobil monster 4x4 cocok untuk medan ekstrem.'], 

        3 => ['nama' => 'beast car', 'harga' => 'Rp 6.750.000', 'foto' => 
        'images/mobil balap.jpeg', 'deskripsi' => 'beast car super cepat.'],

        // ✅ Detail produk baru
        4 => ['nama' => 'RC Drift Supra', 'harga' => 'Rp 5.300.000', 'foto' => 
        'images/supradrift.jpeg', 'deskripsi' => 'Mobil RC Drift Supra dengan ban khusus untuk drift dan performa tinggi.'],
    ]; 
 
    // Pastikan ID valid 
    if (!array_key_exists($id, $produk)) { 
        abort(404, 'Produk tidak ditemukan'); 
    } 
 
    $detail = $produk[$id]; 
    return view('detail', compact('detail')); 
})->name('produk.detail'); 
 
// Logout 
Route::get('/logout', function () { 
    return redirect()->route('beranda'); 
})->name('logout');

// Halaman Produk Penjualan 
Route::get('/produk', function () { 
    $produk = [ 
        ['id' => 1, 'nama' => 'bego', 'harga' => 'Rp 8.500.000', 'foto' => 
        'images/begobadas.jpeg', 'deskripsi' => 'mainan bego proyek.'], 

        ['id' => 2, 'nama' => '4x4monster', 'harga' => 'Rp 4.200.000', 'foto' => 
        'images/4x4monster.jpeg', 'deskripsi' => 'mainan 4x4 monster.'], 

        ['id' => 3, 'nama' => 'beast car', 'harga' => 'Rp 6.750.000', 'foto' => 
        'images/mobil balap.jpeg', 'deskripsi' => 'beast car.'], 

        // ✅ Produk baru
        ['id' => 4, 'nama' => 'supradrift', 'harga' => 'Rp 5.300.000', 'foto' => 
        'images/supradrift.jpeg', 'deskripsi' => 'supradrift dengan kontrol presisi dan kecepatan tinggi.'],
    ]; 

    return view('produk', compact('produk')); 
})->name('produk');
