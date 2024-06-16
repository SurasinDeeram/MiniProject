<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\JobApplicationController;



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
    return view('welcome');
});

Route::get('/FormMain', [Controller::class, 'fromMain']);
Route::get('/formwork', [Controller::class, 'formwork']);



Route::controller(AdminController::class)->group(function (){

    Route::get('/admin', 'index');

    
    

    
});





Route::controller(LoginController::class)->group(function () {

    Route::get('/regis', 'registration');
    // ->middleware('NowLogin');
    Route::post('/regis-user', 'registrationUser')->name('registration.user');


    /***********************Login User***************************** */
    Route::get('/login', 'login');
    // // ->middleware('NowLogin')
    Route::post('/login-user', 'loginUser')->name('login.user');
    Route::get('/login', [LoginController::class, 'login'])->name('Login.login');


    Route::get('/dashboard', 'dashboard');

/*************************** Logout ********************************** */
    

    Route::post('/logout', 'logout')->name('logout');


    /***********************Entrepreneur***************************** */

    Route::get('/entre', 'entre_regis');
    Route::post('/entre-user', 'entreUser')->name('entreregis.user');



    Route::get('/entrelogin', 'entrelogin');
    Route::get('/some-route', [LoginController::class, 'retreplogin']);

    Route::post('/entrepreneur-user', 'entrepreneurUser')->name('entreplogin.user');
    Route::get('/entrepreneur', [LoginController::class, 'retreplogin'])->name('Login.retreplogin');



    Route::get('/dashboard1', 'entreCreate');
    Route::post('/entre_adds', 'entreStore')->name('entre.store');


    Route::get('/entre_dashboard2', 'entreEdit');
    Route::post('/updateEntre', 'entreUpdate')->name('entre.update');
    Route::get('/entre_dashboard2', [LoginController::class, 'dashboard1'])->name('entre_dashboard2');



    Route::get('/entre_update', 'entre_index');
    Route::delete('/entrepreneur-delete/{id}', 'entre_destroy')->name('entre.delete');
    // Route::delete('/entrepreneur-delete/{id}', 'YourControllerName@entre_destroy')->name('entre.destroy');

    Route::get('/form_1', 'form_1');

    Route::get('/dash_search','dash_search');

    Route::get('/entre_update/{id}', [LoginController::class, 'entre_update'])->name('entre.update');

    Route::get('/entre_edit/{id}', [LoginController::class, 'entre_edit'])->name('entre_edit');

    Route::put('/entre_update/{id}', [LoginController::class, 'update'])->name('entre.update');

    Route::get('/entre_index', [LoginController::class, 'entre_index'])->name('entre_index');

    Route::get('/entre_show{id}', [LoginController::class, 'entre_show'])->name('entre.show');

    Route::get('/store', [LoginController::class, 'store']);

    Route::post('/jop_store', [LoginController::class, 'entreStore'])->name('jop.store');

    Route::get('/job_applications/{id}/edit', [Controller::class,'Jop_edit'])->name('job_applications.edit');

    Route::get('/entrep', [LoginController::class, 'index'])->name('entre.index');

    Route::get('/job_application/create', [LoginController::class,'Jop_edit'])->name('job_application.create');

    Route::get('/dashboard1', [JobApplicationController::class, 'index'])->name('dashboard1');

    Route::get('/job_applications', [JobApplicationController::class, 'index'])->name('job_applications.index');
    
    Route::get('/entre_adds', [JobApplicationController::class, 'index'])->name('dashboard1');



});