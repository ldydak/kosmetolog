<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\ContactFormController;


Route::group(['prefix' => '/'], function () {
    // Kosmetolog
    Route::get('', [RoutingController::class, 'kosmetolog'])->name('kosmetolog');
    Route::post('/contact', [ContactFormController::class, 'submit'])->name('contact.submit');
    // Route::get('', [RoutingController::class, 'index'])->name('root');
    // Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    // Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');
});
