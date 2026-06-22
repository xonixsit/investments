<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\CatalogRequestController;

Route::get('/', function () {
    return Inertia::render('Landing/Index');
});

Route::get('/investments', function () {
    return Inertia::render('Investments/Index');
});

Route::get('/guide', function () {
    return Inertia::render('Guide/Index');
});

Route::get('/consult', function () {
    return Inertia::render('Consult/Index');
});
Route::post('/consult', [ConsultationController::class, 'store'])->name('consult.store');

Route::get('/faqs', function () {
    return Inertia::render('Faqs/Index');
});

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/disclaimer', function () {
    return Inertia::render('Disclaimer/Index');
});
Route::get('/privacy', function () {
    return Inertia::render('Privacy/Index');
});
Route::get('/terms', function () {
    return Inertia::render('Terms/Index');
});

Route::post('/catalog-request', [CatalogRequestController::class, 'store'])->name('catalog.request.store');

