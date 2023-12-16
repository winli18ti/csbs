<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Home;
use App\Livewire\Customers;
use App\Livewire\CustomerDetail;
use App\Livewire\Complains;
use App\Livewire\Spks;
use App\Livewire\Collectors;
use App\Livewire\Invoices;
use App\Livewire\Marketers;
use App\Livewire\Officers;
use App\Livewire\Users;

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
Route::middleware(['guest'])->group(function(){
    Route::get('/', function(){
        return redirect('login');
    });
    Route::get('/login', Login::class)->name('login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/home', Home::class)->name('home');
    
    Route::get('/customers', Customers::class)->name('customers');
    Route::get('/customer_detail/{id}', CustomerDetail::class)->name('pelanggan_detail');
    Route::get('/invoices', Invoices::class)->name('invoices');
    Route::get('/complains', Complains::class)->name('complains');
    Route::get('/spks', Spks::class)->name('spks');
    Route::get('/collectors', Collectors::class)->name('collectors');
    Route::get('/marketers', Marketers::class)->name('marketers');
    Route::get('/officers', Officers::class)->name('officers');
    Route::get('/users', Users::class)->name('users');

    Route::post('logout', LogoutController::class)->name('logout'); 
});