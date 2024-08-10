<?php

use App\Http\Controllers\KursusController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

Route::view('/','home')
    ->name('home.home');

Route::controller(KursusController::class)
    ->prefix('kursus')
    ->name('kursus.')
    ->group(function(){

        Route::get('/', 'index')
            ->name('index');
        
        Route::get('/create', 'create')
            ->name('create');

        Route::get('/{kursus}', 'show')
            ->name('show');

        Route::post('/store', 'store')
            ->name('store');

        Route::get('/{kursus}/edit', 'edit')
            ->name('edit');

        Route::patch('/{kursus}', 'update')
            ->name('update');

        Route::delete('/{kursus}', 'destroy')
            ->name('destroy');
    });

Route::controller(MateriController::class)
    ->prefix('materi')
    ->name('materi.')
    ->group(function(){

        Route::get('/', 'index')
            ->name('index');

        Route::get('/create', 'create')
            ->name('create');

        Route::get('/{materi}', 'show')
            ->name('show');

        Route::post('/store', 'store')
            ->name('store');

        Route::get('/{materi}/edit', 'edit')
            ->name('edit');

        Route::patch('/{materi}', 'update')
            ->name('update');

        Route::delete('/{materi}', 'destroy')
            ->name('destroy');
    });
