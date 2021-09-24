<?php


use App\Http\Controllers\GoatController;
use App\Http\Controllers\HealthHistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicalExaminationController;
use App\Http\Controllers\MotherBreedingController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\WeightUpdateController;
use App\Models\Goat;
use Illuminate\Support\Facades\Auth;
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
})->middleware('auth');

Auth::routes();



Route::get('/profile', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit_profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('goats',GoatController::class)->middleware('auth');
Route::get('homeUpdate',[GoatController::class, 'homeUpdate'])->middleware('auth')->name('goats.updateHome');
Route::get('search', [GoatController::class, 'search'])->middleware('auth')->name('goats.search');

Route::get('breed',[MotherBreedingController::class, 'breed'])->middleware('auth')->name('goats.breed');
Route::post('updateBreed',[MotherBreedingController::class, 'updateBreed'])->name('goats.updateBreed');

Route::get('weight',[WeightUpdateController::class, 'weight'])->middleware('auth')->name('goats.weight');
Route::post('updateWeight',[WeightUpdateController::class, 'updateWeight'])->name('goats.updateWeight');

Route::get('health',[HealthHistoryController::class, 'health'])->middleware('auth')->name('goats.health');
Route::post('healthUpdate',[HealthHistoryController::class, 'healthUpdate'])->name('goats.healthUpdate');

Route::get('medical',[MedicalExaminationController::class, 'medical'])->middleware('auth')->name('goats.medical');
Route::post('medicalUpdate',[MedicalExaminationController::class, 'medicalUpdate'])->name('goats.medicalUpdate');

Route::get('vaccination',[VaccinationController::class, 'vaccination'])->middleware('auth')->name('goats.vaccination');
Route::post('vaccineUpdate',[VaccinationController::class, 'vaccineUpdate'])->name('goats.vaccineUpdate');

// Route::post('creategoat',[GoatController::class, 'creategoat'])->name('goat.create');
// Route::get('showgoat',[GoatController::class, 'showgoat']);
