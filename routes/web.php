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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/camera', function () {
    return view('camera');
});


Route::get('/report','PdfReportController@displayReport');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('customer','CustomerController');
Route::resource('branch','BranchController');
Route::resource('cheque','ChequeController');
Route::resource('currencyrate','CurrencyRateController');
Route::resource('draft','DraftController');
Route::resource('employee','EmployeeController');
Route::resource('fingerprint','FingerprintController');
Route::resource('transaction','TransactionController');
Route::resource('wallet','WalletController');
