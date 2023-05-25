<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/search', [PublicController::class, 'searchCars'])->name('cars.search');
Route::get('/contact-us', [PublicController::class, 'contactPage'])->name('contact-us');
Route::post('/send-contact', [PublicController::class, 'contactSend'])->name('contact.send');
Route::get('/cars/{id}', [PublicController::class, 'details'])->name('car.show');