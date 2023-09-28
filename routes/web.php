<?php

use App\Http\Controllers\HomeController;
use Ezegyfa\LaravelHelperMethods\Language\LanguageMethods;
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

Route::middleware('setLanguage')->group(function () {
    Route::post('/', [HomeController::class, 'storeContactMessage']);
    LanguageMethods::createGetRouteWithLanguage('/', [HomeController::class, 'home']);
});
