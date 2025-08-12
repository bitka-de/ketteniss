<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontaktController;

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/ueber-uns', function () {return view('ueber-uns');})->name('ueber-uns');
Route::get('/leistungen', function () {return view('pages/leistungen/index');})->name('leistungen');
Route::get('/leistungen/stundenweise-betreuung', function () {return view('pages/leistungen/stundenweise');})->name('leistungen.stundenweise');
Route::get('/leistungen/alltagsbegleitung-haushalt', function () {return view('pages/leistungen/haushalt');})->name('leistungen.haushalt');
Route::get('/leistungen/demenzbegleitung', function () {return view('pages/leistungen/demenzbegleitung');})->name('leistungen.demenzbegleitung');
Route::get('/leistungen/begleitung-einkauf-arzt', function () {return view('pages/leistungen/begleitung-einkauf-arzt');})->name('leistungen.einkauf-arzt');
Route::get('/kosten', function () {return view('kosten');})->name('kosten');
Route::get('/einsatzgebiet', function () {return view('pages/einsatzgebiet/index');})->name('einsatzgebiet');
Route::get('/einsatzgebiet/herzogenrath', function () {return view('pages/einsatzgebiet/herzogenrath');})->name('einsatzgebiet.herzogenrath');
Route::get('/einsatzgebiet/wuerselen', function () {return view('pages/einsatzgebiet/wuerselen');})->name('einsatzgebiet.wuerselen');
Route::get('/faq', function () {return view('faq');})->name('faq');
Route::get('/jobs', function () {return view('jobs');})->name('jobs');
Route::get('/kontakt', function () {return view('kontakt');})->name('kontakt');
Route::post('/kontakt', [KontaktController::class, 'absenden'])->name('kontakt.absenden');


Route::get('/impressum', function () {return view('impressum');})->name('impressum');
Route::get('/datenschutz', function () {return view('datenschutz');})->name('datenschutz');

Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index']);



