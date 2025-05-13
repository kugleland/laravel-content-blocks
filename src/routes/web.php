<?php

use Illuminate\Support\Facades\Route;
use Kugleland\LaravelContentBlocks\Http\Controllers\MyController;

Route::get('/content-blocks', [MyController::class, 'index'])->name('content-blocks.index');