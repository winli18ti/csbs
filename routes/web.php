<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Customers;
use App\Livewire\CustomerDetail;
use App\Livewire\Complains;
use App\Livewire\Spks;
use App\Livewire\Account;
use App\Livewire\Collectors;
use App\Livewire\Marketers;
use App\Livewire\Officers;

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
Route::get('/pelanggan', Customers::class)->name('pelanggan');
Route::get('/pelanggan_detail/{id}', CustomerDetail::class)->name('pelanggan_detail');

Route::get('/home', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/customers', Customers::class)->name('customers');
Route::get('/complains', Complains::class)->name('complains');
Route::get('/spks', Spks::class)->name('spks');
Route::get('/account', Account::class)->name('account');
Route::get('/collectors', Collectors::class)->name('collectors');
Route::get('/marketers', Marketers::class)->name('marketers');
Route::get('/officers', Officers::class)->name('officers');