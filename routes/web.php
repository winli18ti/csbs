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
use App\Livewire\Account;
use App\Livewire\Noc;
use App\Livewire\Summary;
use App\Livewire\Report;

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
    Route::get('/account', Account::class)->name('account');
    
    Route::get('/customers', Customers::class)->name('customers');
    Route::get('/customer_detail/{id}', CustomerDetail::class)->name('pelanggan_detail');
    Route::get('/invoices', Invoices::class)->name('invoices');
    Route::get('/complains', Complains::class)->name('complains');
    Route::get('/spks', Spks::class)->name('spks');
    Route::get('/collectors', Collectors::class)->name('collectors');
    Route::get('/marketers', Marketers::class)->name('marketers');
    Route::get('/officers', Officers::class)->name('officers');
    Route::get('/users', Users::class)->name('users');
    Route::get('/summary_invoice', Summary::class);
    Route::get('/summary_paid_invoice', Summary::class);
    Route::get('/summary_paid_detail', Summary::class);
    Route::get('/summary_payment', Summary::class);
    Route::get('/summary_collector', Summary::class);

    Route::get('/report_income_paid', Report::class);
    Route::get('/report_income', Report::class);
    Route::get('/report_sales', Report::class);
    Route::get('/report_node', Report::class);
    Route::get('/report_complain', Report::class);
    Route::get('/report_selling', Report::class);
    Route::get('/report_dismantle_date', Report::class);
    Route::get('/report_dismantle_regs', Report::class);

    Route::get('/noc_tools', Noc::class);

    Route::post('logout', LogoutController::class)->name('logout'); 
});