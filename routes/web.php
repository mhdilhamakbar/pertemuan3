<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

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
    return view('welcome',['nama'=>'Akbar', 'jurusan'=>'Sistem Informasi']);
});
Route::get('/Mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/Mahasiswa/create', [mahasiswaController::class, 'create']);
// Route::get('/Mahasiswa', function () {
//     $mhs =[
//         1=> ['nama'=>'Akbar', 'jurusan'=>'Sistem Informasi'],
//         2=> ['nama'=>'Jono', 'jurusan'=>'Sistem Informasi'],
//         3=> ['nama'=>'Juni', 'jurusan'=>'Informatika']
//     ];
    
//     return view('listMahasiswa')->with('mhs',$mhs);
// });

