<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Nevadskiy\Money\Http\Controllers\Api;

Route::get('currencies', [Api\CurrencyController::class, 'index'])->name('api.currencies.index');
