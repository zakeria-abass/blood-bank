<?php


/*
|--------------------------------------------------------------------------
| User Routes
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

use App\Http\Controllers\Users\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::group(['middleware' => ['auth','verified']],function() {
    Route::get('/User', function () {
        return view('Users.index');
    })->name('Users');

    Route::resource('profile-User',ProfileController::class);

});
