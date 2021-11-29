<?php

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

Route::get('/', function () {

  $InformationArray=Array(
    "ParentPage"  =>   "Account Management",
    "CurrentPage" =>   "Create New Accounts",
    "FormName"    =>    "Account Information",
  );
    return view('welcome',$InformationArray);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/CreateAccounts', [App\Http\Controllers\HomeController::class, 'CreateAccounts'])->name('CreateAccounts');
//StoreNewAccounts   leadStatus
Route::post('/StoreNewAccounts', [App\Http\Controllers\HomeController::class, 'StoreNewAccounts'])->name('StoreNewAccounts');


Route::get('/CreateLead', [App\Http\Controllers\HomeController::class, 'CreateLead'])->name('CreateLead');
Route::post('/StoreNewLeads', [App\Http\Controllers\HomeController::class, 'StoreNewLeads'])->name('StoreNewLeads');


Route::get('/leadStatus', [App\Http\Controllers\HomeController::class, 'leadStatus'])->name('leadStatus');
// updateStatus

Route::post('/updateStatus', [App\Http\Controllers\HomeController::class, 'updateStatus'])->name('updateStatus');
