<?php

use App\Http\Controllers\Admin\DepartamentController;
use App\Http\Controllers\Admin\OperationController;
use App\Http\Controllers\Admin\PoverkaController;
use App\Http\Controllers\Admin\PriborController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['splade'])->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::resource('departaments', DepartamentController::class);
        Route::resource('type', TypeController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('pribor', PriborController::class);
        Route::resource('operation', OperationController::class);
        Route::resource('poverka', PoverkaController::class);
    });
});
