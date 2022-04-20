<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');



Route::get('my-name', function () {
    return view('Максмм Дятлов');
});

Route::get('my-friend', function () {
    return view('Николай Ананасов');
});

Route::get('get-friend/{name}', function ($name) {
    return $name;
});

Route::get('my-city/{city}', function ($city) {
    return $city;
})->where('city', '[A-Z-a-z]+');

Route::get('level/{lvl}', function ($lvl) {
    if ($lvl > 0 && $lvl < 25)
        return view('новичок');
    if ($lvl > 25 && $lvl < 50)
        return view('специалист');
    if ($lvl > 50 && $lvl < 75)
        return view('босс');
    if ($lvl > 75 && $lvl < 99)
        return view('старик');
    if ($lvl == 99)
        return view('король');
});
Route::get('working/{name}/{date}', function ($name, $date) {
    return 'Name: ' .$name .' Date: ' .$date;
});
Route::get('power', function () {
    return route('power');
})->name('power');
Route::prefix('admin')->group(function () {
    Route::get('login', function () {
        return route('login');
    })->name('login');
    Route::get('logout', function () {
        return route('logout');
    })->name('logout');
    Route::get('info', function () {
        return route('info');
    })->name('info');
    Route::get('color', function () {
        return route('color');
    })->name('color');
});
Route::get('admin/web', function () {
    return view('admin/color');
})->name('admin/web');
Route::get('color/{hex}', function ($hex) {
    //
})->where('hex', '[A-F0-9]{1,6}');

Route::middleware('validationToken')->group(function () {
   Route::get('project', function() { return 'Project One';});
});

Route::get('main', [MainController::class, 'test']);
Route::get('ip', [MainController::class, 'index']);

Route::get('user/{id}', [MainController::class, 'user'])->whereNumber('id');
