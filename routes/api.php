<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LetterController;

Route::get('/assign/{id}',[LetterController::class, 'assignLetterToNumber'])->name('apiassign');
