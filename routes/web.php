<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
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

Route::get('/', [Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'create']);

Route::get('addAdmin', function() {

    $user = User::with('roles')->find(7);
    $user->assignRole('owner');
    return dd($user);


});


Route::middleware(['auth:sanctum', 'verified'])->group( function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users', function (){
        return view('users');
    })->name('users');

    Route::get('/systems', function (){
        return view('systems');
    })->name('systems');
});
