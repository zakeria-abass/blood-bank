<?php

use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
|--------------------------------------------------------------------------
| Auth Admins
|--------------------------------------------------------------------------
|
*/
require __DIR__ . '/authAdmin.php';


Route::group(['middleware' => ['auth:admin','verified:admin.verification.notice']],function() {
    Route::get('/Admins', function () {
        return view('Admin/index');
    })->name('Admins');


    Route::resource('profile-Admin',ProfileController::class);
});
