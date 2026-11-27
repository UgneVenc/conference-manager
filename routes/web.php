<?php

use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConferenceController::class, 'index'])
    ->name('conferences.index');

Route::get('/conferences/{conference}', [ConferenceController::class, 'show'])
    ->whereNumber('conference')
    ->name('conferences.show');