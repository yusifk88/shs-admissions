<?php

use App\Http\Controllers\AdminssionController;
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
    return view('welcome');
});


Route::get("start", [AdminssionController::class, "index"])->name("start");
Route::post("find", [AdminssionController::class, "start"])->name("search");
Route::get("{uuid}/update",[AdminssionController::class,"showUpdate"])->name("requestUpdate");
Route::get("{uuid}/print",[AdminssionController::class,"print"])->name("print");
Route::post("{uuid}/save",[AdminssionController::class,"update"])->name("update");
Route::middleware('auth')->group(function (){


    Route::get('/dashboard',[AdminssionController::class,"dashboard"])->name("dashboard");
    Route::get('/dashboard/settings',[AdminssionController::class,"settings"])->name("settings");
    Route::post('/dashboard/settings',[AdminssionController::class,"saveSettings"])->name("saveSettings");
    Route::get('/dashboard/settings/{id}/delete',[AdminssionController::class,"deleteSettings"])->name("deleteSettings");
    Route::get('/dashboard/items',[AdminssionController::class,"items"])->name("items");
    Route::get('/dashboard/items/{id}/delete',[AdminssionController::class,"deleteitem"])->name("deleteitem");
    Route::get('/dashboard/students/',[AdminssionController::class,"students"])->name("students");
    Route::post('/dashboard/items',[AdminssionController::class,"saveitem"])->name("saveitem");
    Route::post('/dashboard/students/import',[AdminssionController::class,"importStudents"])->name("importStudents");


});


require __DIR__ . '/auth.php';
