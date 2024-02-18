<?php
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index'])->name('home');

Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/create', [MahasiswaController::class, 'save']);
Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [MahasiswaController::class, 'update']);