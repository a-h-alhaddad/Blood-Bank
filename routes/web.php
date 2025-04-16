<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\Hospital\requestController;
use App\Http\Controllers\Dashboard\Donor\donorRequestController;
use App\Http\Controllers\Dashboard\Donor\donor_listController;
use App\Http\Controllers\Dashboard\hospital\hospital_listController;
use App\Http\Controllers\blood_stockController;
use App\Http\Controllers\Manage_hospitals\manage_hospitalController;
use App\Http\Controllers\Manage_donors\manage_donorController;
use App\Http\Controllers\Dashboard\Donor\edit_donorController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    if(auth()->guard('user')->check()){
    return Redirect::route('user.dashboard');
    }
    else if (auth()->guard('donor')->check()) {
        return Redirect::route('donor.dashboard');
    }
    else if (auth()->guard('hospital')->check()) {
        return Redirect::route('hospital.dashboard');
    }
    else if (auth()->guard('blood_bank')->check()) {
        return Redirect::route('blood_bank.dashboard');
    }
})->middleware(['auth:user,donor,hospital,blood_bank']);

Route::prefix('user')
      ->name('user')
      ->middleware(['auth:user','verified'])
      ->group(function($request){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('user.dashboard');
      });

Route::prefix('donor')
      ->name('donor')
      ->middleware(['auth:donor','verified'])
      ->group(function($request){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('donor.dashboard');
      });

      Route::prefix('hospital')
      ->name('hospital')
      ->middleware(['auth:hospital','verified'])
      ->group(function($request){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('hospital.dashboard');
      });

      Route::prefix('blood_bank')
      ->name('blood_bank')
      ->middleware(['auth:blood_bank','verified'])
      ->group(function($request){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('blood_bank.dashboard');
      });

// Route::get('hospital/dashboard', function () {
//     return view('Dashboard.Hospital.create'); // Assuming you have a single 'dashboard' view
// })->name('hospital.dashboard');

Route::get('blood_bank/dashboard', function () {
    return view('dashboard'); // Assuming you have a single 'dashboard' view
})->name('blood_bank.dashboard');

Route::resource('blood_bank_request', requestController::class);

Route::resource('donor_request', donorRequestController::class);

Route::resource('blood_stock', blood_stockController::class);

Route::resource('manage_hospital', manage_hospitalController::class);

Route::resource('manage_donor', manage_donorController::class);

Route::get('/home', [homeController::class, 'index'])->name('home');

Route::get('/donor_list',[donor_listController::class, 'index'])->name('donor_list');

Route::get('/hospital_list',[hospital_listController::class, 'index'])->name('hospital_list');

Route::get('/edit_donor',[edit_donorController::class, 'index'])->name('edit_donor');

Route::get('hospital/dashboard',[requestController::class, 'create'])->name('hospital.dashboard');

Route::get('donor/dashboard',[donor_listController::class, 'index'])->name('donor.dashboard');

Route::get('user/dashboard',[requestController::class, 'index'])->name('user.dashboard');

Route::post('logout-test', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout-test');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
