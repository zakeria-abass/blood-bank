<?php


/*
|--------------------------------------------------------------------------
| Hospital Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
|--------------------------------------------------------------------------
| Auth Hospital
|--------------------------------------------------------------------------
|
*/

use App\Http\Controllers\Hospitals\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:hospital','verified:hospital.verification.notice']],function() {
    Route::get('/Hospitals', function () {
        return view('Hospitals.index');
    })->name('Hospitals');

    Route::resource('profile',ProfileController::class);

});
require __DIR__ . '/authHospitals.php';

