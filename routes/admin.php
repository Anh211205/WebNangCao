<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

Route::prefix('admin')
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('products', ProductController::class);

        Route::resource('orders', OrderController::class)
            ->only(['index', 'show']);
            Route::post(
            'orders/{order}/status',
            [OrderController::class, 'updateStatus']
        )->name('orders.updateStatus');
    });
