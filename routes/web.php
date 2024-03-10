<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\G11Controller;
use App\Http\Controllers\G12Controller;
use App\Http\Controllers\G12wController;
use App\Http\Controllers\G13Controller;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\TariffControler;
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

Route::get('/', [TariffControler::class, 'show']);

Route::get('/taryfa-g11', [TariffControler::class, 'showG11'])->name('show_g11');
Route::get('/taryfa-g12', [TariffControler::class, 'showG12'])->name('show_g12');
Route::get('/taryfa-g12w', [TariffControler::class, 'showG12W'])->name('show_g12w');
Route::get('/taryfa-g13', [TariffControler::class, 'showG13'])->name('show_g13');

Route::post('/taryfa-g11/wynik', [G11Controller::class, 'calculateG11'])->name('calculateg11');
Route::post('/taryfa-g12/wynik', [G12Controller::class, 'calculateG12'])->name('calculateg12');
Route::post('/taryfa-g12/wynikw', [G12wController::class, 'calculateG12w'])->name('calculateg12w');
Route::post('/taryfa-g13/wynik', [G13Controller::class, 'calculateG13'])->name('calculateg13');

// more section
Route::get('/więcej', [MoreController::class, 'showMore'])->name('show_more');

Route::get('/więcej/najczęściej-zadawane-pytania', [FaqController::class, 'showFaq'])->name('faq');
// Route::get('/pobierz/{filename}', [FaqController::class, 'download'])->name('download');

Route::get('/więcej/regulamin', function () {
  return view('more.terms&conditions');
})->name('terms&conditions');

Route::get('/więcej/polityka-prywatności', function () {
  return view('more.privacy-policy');
})->name('privacy_policy');

// redirect to show page if url doesnt match
Route::any(
  '{query}',
  function () {
    return redirect('/');
  }
)
  ->where('query', '.*');
