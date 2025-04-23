<?php

use App\Http\Controllers\SubscribeToNewsletterController;
use Illuminate\Support\Facades\Route;

Route::post('subscribe', SubscribeToNewsletterController::class)
    ->name('subscribe')
    ->middleware('throttle:subscribe-to-newsletter');
