<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Selamat datang di projek blog";
});

Route::get('user/{name?}', function ($name = 'Aliffia') {
    return $name;
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Halaman ADMIN';
    });
    Route::get('/post', function () {
        return 'Halaman ADMIN untuk mengelola data postingan';
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::resource('post', 'PostController');
