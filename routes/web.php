<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaitlistController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('waitlist/join', [WaitlistController::class, 'joinWaitlist'])->name('waitlist.join');
