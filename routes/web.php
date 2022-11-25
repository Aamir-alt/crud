<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\playersController;
use App\Http\Controllers\teamsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[playersController::class,"viewData"]);

Route::view("player/create","players.create");
Route::post("/player/save",[playersController::class,"saveData"]);
Route::get("/player",[playersController::class,"viewData"]);
Route::get("/player/{id}/detail",[playersController::class,"detail"]);
Route::get("/player/{id}/delete",[playersController::class,"deleteData"]);
Route::get("player/{id}/edit",[playersController::class,"editData"]);                                                                                                                                                                                                                                                                                                               
Route::post("player/edit",[playersController::class,"update"])->name('editdata');

// // teams route

Route::view("team/create","teams.create");
Route::post("team/save",[teamsController::class,"saveData"]);
Route::get("/team",[teamsController::class,"viewData"]);
Route::get("/team/{id}/detail",[teamsController::class,"detail"]);
Route::get("/team/{id}/delete",[teamsController::class,"deleteData"]);
Route::get("team/{id}/edit",[teamsController::class,"editData"]);
Route::post("team/edit",[teamsController::class,"update"])->name('editdata');
