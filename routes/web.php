<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientResponseController;
use App\Http\Controllers\AttemptController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthClientController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\InvoiceController;
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

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::middleware(['auth:sanctum', 'verified', 'client.linked'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/firm/{id}', [FirmController::class, 'get'])->name('firm-detail');
    Route::get('/invoice/{id}', [InvoiceController::class, 'get'])->name('invoice.detail');
    Route::get('/attempt/{id}', [AttemptController::class, 'show'])->name('attempt.detail');
    Route::get('/attempt', [AttemptController::class, 'show'])->name('attempt');
    Route::get('/search', [SearchController::class, 'show'])->name('search');
    Route::get('/reports', [SearchController::class, 'showReport'])->name('reports');
    Route::get('/client-response/{id}', [ClientResponseController::class, 'show'])->name('client-response');
    Route::get('/firm', [FirmController::class, 'getAccountBalance'])->name('firm');
    Route::get('/account-balance', [FirmController::class, 'getAccountBalance'])->name('account-balance');
    Route::get('/pay-account-balance', [FirmController::class, 'getPayAccountBalance'])->name('pay-account-balance');
    Route::get('/spreadsheet', [FirmController::class, 'getSpreadsheet'])->name('spreadsheet');
    Route::get('/spreadsheet-excel', [FirmController::class, 'getExcelExport'])->name('spreadsheet-excel');
    Route::get('/pay-select-invoices', [FirmController::class, 'getPaySelectInvoices'])->name('pay-select-invoices');
    Route::get('/hearing-date', [FirmController::class, 'getHearingDate'])->name('hearing-date');
    Route::get('/hearing-date-print', [FirmController::class, 'getHearingDatePrint'])->name('hearing-date-print');
    Route::get('/pymt-stub-check', [FirmController::class, 'getPymtStubCheck'])->name('pymt-stub-check');
    Route::get('/dashboard/paid-invoices', [DashboardController::class, 'getPaidInvoices'])->name('dashboard-paid-invoices');
    Route::get('/invoice/{id}/pay', [InvoiceController::class, 'pay'])->name('invoice.pay');
    Route::post('/invoice/{id}/client-response', [InvoiceController::class, 'clientResponse'])->name('invoice.client-response');
    Route::get('/authclient', [AuthClientController::class, 'show'])->name('auth-client');
    Route::post('/invoice/{id}/pay', [InvoiceController::class, 'submitPayment'])->name('invoice.pay.submit');
    Route::post('/invoice/{id}/stripe/getClientSecret', [InvoiceController::class, 'getStripeClientSecret'])->name('invoice.pay.stripe.get-client-secret');
    Route::get('/get_customer', [DashboardController::class, 'getCustomer'])->name('get-customer');
    Route::post('/client-email', [ClientResponseController::class, 'store'])->name('client-response.store');
});

Route::middleware(['web', 'verified', 'auth:sanctum'])->group(function(){
    Route::get('/user/account-link', [AccountController::class, 'showLinkAccount'])->name('user.link-account');
    Route::post('/user/account-link', [AccountController::class, 'storeLinkAccount'])->name('user.link-account.store');
});


