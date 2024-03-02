<?php
use App\Http\Controllers\JadwalKuliahController;
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
//     return view('welcome');
// });

Route::get('/', [JadwalKuliahController::class, 'index'])->name('home');

Route::get('/create', [JadwalKuliahController::class, 'create'])->name('create');
Route::post('/create', [JadwalKuliahController::class, 'save']);
Route::get('/delete/{id}', [JadwalKuliahController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [JadwalKuliahController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [JadwalKuliahController::class, 'update']);