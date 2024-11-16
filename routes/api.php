<?php

use App\Features\Department\Controllers\GetDepartmentsController;
use App\Features\JobTitle\Controllers\GetJobTitleController;
use App\Features\User\Controllers\AddUserController;
use App\Features\User\Controllers\DeleteUserController;
use App\Features\User\Controllers\EditUserController;
use App\Features\User\Controllers\GetByIdUserController;
use App\Features\User\Controllers\GetUsersController;
use Illuminate\Support\Facades\Route;

Route::prefix('department')
    ->name('department')
    ->group(function () {
        Route::get('/', GetDepartmentsController::class)->name('get');
    });

Route::prefix('job-title')
    ->name('job-title')
    ->group(function () {
        Route::get('/', GetJobTitleController::class)->name('get');
    });

Route::prefix('user')
    ->name('user')
    ->group(function () {
        Route::get('/', GetUsersController::class)->name('get');
        Route::get('/{id}', GetByIdUserController::class)->name('get-by-id');
        Route::post('/', AddUserController::class)->name('add');
        Route::put('/', EditUserController::class)->name('edit');
        Route::delete('/{id}', DeleteUserController::class)->name('delete');
    });
