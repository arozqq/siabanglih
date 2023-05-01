<?php
use App\Http\Controllers\Admin\ManagementPesertaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
    // return view('home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'cek_login'])->name('cek_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('management-peserta', [ManagementPesertaController::class, 'index'])->name('management-peserta.index');
    Route::post('store-peserta', [ManagementPesertaController::class, 'store'])->name('management-peserta.store');
    Route::get('peserta/{id}/edit', [ManagementPesertaController::class, 'edit']);
    Route::delete('delete-peserta/delete/{id}', [ManagementPesertaController::class, 'destroy']);
    Route::delete('selected-peserta', [ManagementPesertaController::class, 'deleteSelected'])->name('management-peserta.delete-selected');
    
});