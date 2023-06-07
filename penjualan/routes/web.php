<?php
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForminputController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam',function(){
    return view('salam', [
        "nama"=>"Raja gusti Pangestu",
        "umur"=>19
    ]);
});

Route::get('/formulir',function(){
    return view('formulir',[
        "nama"=>"Raja Gusti Pangestu",
        "tanggal_pemeriksaan"=>"3 April 2023",
        "umur"=>19,
        "jenis_kelamin"=>"Laki - Laki"
    ]);
});

Route::get('/nilai',function(){
    return view('nilai');
});

Route::get('/form',[FormController::class, 'index']);
Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/tugasform',[ForminputController::class, 'index']);
Route::POST('/tugashasil',[ForminputController::class, 'tugashasil']);

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});

Route::prefix('frontend')->group(function(){
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [FrontendController::class, 'about']);
});
