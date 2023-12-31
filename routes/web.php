<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


// Penjual
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('Is_Seller');
Route::get('/Welcomeseller',[App\Http\Controllers\HomeController::class, 'loginSeller'])->name('SellerPage')->middleware('Is_Seller');
Route::get('/Dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('SellerPage')->middleware('Is_Seller');
Route::get('/navbarSeller',[App\Http\Controllers\DashboardController::class, 'navbar'])->name('navbar')->middleware('Is_Seller');
Route::get('/kategori',[App\Http\Controllers\KategoriController::class, 'index'])->name('kategori')->middleware('Is_Seller');
Route::get('/Produk',[App\Http\Controllers\DashboardController::class, 'produk'])->name('produk')->middleware('Is_Seller');
Route::get('/Profil',[App\Http\Controllers\ProfilController::class, 'profil'])->name('Profil')->middleware('Is_Seller');
Route::post('/Tambahkategori',[App\Http\Controllers\KategoriController::class, 'tambahKategori']);
Route::post('/Updatekategori',[App\Http\Controllers\KategoriController::class, 'update']);
Route::post('/Deletekategori',[App\Http\Controllers\KategoriController::class, 'destroy']);


// Pembeli
Route::get('/', [App\Http\Controllers\ProdukController::class, 'showProduk'])->middleware('Is_Buyer');
Route::get('/Katalog/{row}',[App\Http\Controllers\ProdukController::class, 'showDetail'])->name('produkDetail')->middleware('Is_Buyer');
Route::get('/Keranjang',[App\Http\Controllers\KeranjangController::class, 'index'])->name('keranjangIndex')->middleware('Is_Buyer');
Route::post('/Katalog/TambahKeranjang',[App\Http\Controllers\KeranjangController::class, 'store'])->name('keranjangStore')->middleware('Is_Buyer');
Route::post('/Katalog/UpdateKeranjang',[App\Http\Controllers\KeranjangController::class, 'store'])->name('keranjangUpdate')->middleware('Is_Buyer');
Route::get('/Katalog/Lokasi',[App\Http\Controllers\ProdukController::class, 'getKatalogLokasi'])->name('getKatalogLokasi')->middleware('Is_Buyer');
Route::get('/search',[App\Http\Controllers\ProdukController::class, 'search'])->name('searchProduk')->middleware('Is_Buyer');
Route::get('/Keranjang/Delete/{dk}',[App\Http\Controllers\KeranjangController::class, 'destroy'])->name('DeleteDataKeranjang')->middleware('Is_Buyer');
Route::get('updateQtyCart',[App\Http\Controllers\KeranjangController::class, 'update'])->middleware('Is_Buyer');
Route::get('/Seller/{id}/Katalog',[App\Http\Controllers\ProdukController::class, 'SellerKatalog'])->name('getSeller')->middleware('Is_Buyer');
Route::get('/chatwhatsapp',[App\Http\Controllers\KeranjangController::class, 'clickwa'])->name('chatWhatsapp')->middleware('Is_Buyer');
Route::get('/Profil',[App\Http\Controllers\ProfileController::class, 'showProfile'])->name('Profile')->middleware('Is_Buyer');
Route::post('/Profil',[App\Http\Controllers\ProfileController::class, 'editProfile'])->middleware('Is_Buyer');
// Route::get('lokasi',[App\Http\Controllers\ProdukController::class, 'lokasiWisata'])->middleware('Is_Seller'); // routing sorting lokasi cadangan pake jqeuryy

Route::get('Katalog',[App\Http\Controllers\ProdukController::class, 'showProduk'])->name('getProduk')->middleware('Is_Buyer');
Route::get('Lokasi/{id}',[App\Http\Controllers\ProdukController::class, 'lokasiProduk'])->name('lokasiProduk')->middleware('Is_Buyer');
