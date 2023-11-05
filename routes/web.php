<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coderumedController;
use App\Http\Controllers\qrcontroller;
use App\Http\Controllers\resultbdController;
use App\Models\qrgenerator;
use Illuminate\Http\Request;

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
    return view('auth.login');
});

//coderumed ""base de datos
Route::get('/add-coderumed', function () {
    return view('Admin.add_coderumed');
})->middleware(['auth'])->name('add.coderumed');

Route::post('/insert-coderumed',[coderumedController::class,'store'])->middleware(['auth']);

Route::get('/all-coderumed',[coderumedController::class,'allcoderumed'])->middleware(['auth'])->name('all.coderumed');

Route::get('/available-coderumed',[coderumedController::class,'availablecoderumed'])->middleware(['auth'])->name('available.coderumed');

Route::get('/purchase-coderumed/{id}', [coderumedController::class,'purchaseData'])->middleware(['auth']);

Route::post('/insert-purchase-coderumed',[coderumedController::class,'storePurchase'])->middleware(['auth']);



// registro del resultado del test de B&D
Route::get('/add-resultbd', function(){
    return view('Admin.add_resultbd');
})->middleware(['auth'])->name('add.resultbd');


Route::post('insert-resultbd',[resultbdController::class, 'store'])->middleware(['auth']);


Route::get('/add-qrgenerator', function(){
    return view('Admin.add_qrgenerator');
})->middleware(['auth'])->name('add.qrgenerator');


Route::get('generate',[qrcontroller::class,'generate']);

//Route::post('insert-qrgenerator',[resultbdController::class, 'store'])->middleware(['auth']);

/*
//invoice
Route::get('/add-invoice/{id}', [InvoiceController::class,'formData'])->middleware(['auth']);

Route::get('/new-invoice', [InvoiceController::class,'newformData'])->middleware(['auth'])->name('new.invoice');

Route::post('/insert-invoice',[InvoiceController::class,'store'])->middleware(['auth']);

Route::get('/invoice-details', function () {
    return view('Admin.invoice_details');
})->middleware(['auth'])->name('invoice.details');

Route::get('/all-invoice', [InvoiceController::class,'allInvoices'])->middleware(['auth'])->name('all.invoices');

Route::get('/sold-products',[InvoiceController::class,'soldProducts'])->middleware(['auth'])->name('sold.products');
// Route::get('/delete', [InvoiceController::class,'delete']);


//order
Route::get('/add-order/{name}', [ProductController::class,'formData'])->middleware(['auth'])->name('add.order');

Route::post('/insert-order',[OrderController::class,'store'])->middleware(['auth']);

Route::get('/all-orders',[OrderController::class,'ordersData'])->middleware(['auth'])->name('all.orders');

Route::get('/pending-orders',[OrderController::class,'pendingOrders'])->middleware(['auth'])->name('pending.orders');

Route::get('/delivered-orders',[OrderController::class,'deliveredOrders'])->middleware(['auth'])->name('delivered.orders');

Route::get('/new-order', [OrderController::class,'newformData'])->middleware(['auth'])->name('new.order');

Route::post('/insert-new-order',[OrderController::class,'newStore'])->middleware(['auth']);


//customer
Route::get('/add-customer', function () {
    return view('Admin.add_customer');
})->middleware(['auth'])->name('add.customer');

Route::post('/insert-customer',[CustomerController::class,'store'])->middleware(['auth']);

Route::get('/all-customers',[CustomerController::class,'customersData'])->middleware(['auth'])->name('all.customers');
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';