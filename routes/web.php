<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailController;

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
//*********************Authentification****************** */

Route::get('/login',[AuthController::class,'login']);

Route::post('/login-user',[AuthController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::get('/logout',[AuthController::class,'logout']);


//************************Client*************** */

Route::get('/Client',[ClientController::class,'index'])->name('Client');

//*************************************** */

Route::get('/create',[ClientController::class,'create'])->name('create');

//*************************************** */

Route::post('/store',[ClientController::class,'store'])->name('store');

//*************************************** */

Route::get('/Client/{id}/edit',[ClientController::class,'edit']);

//*************************************** */

Route::put('/Client/{id}',[ClientController::class,'update']);

//*************************************** */

Route::get('/delete/{id}',[ClientController::class,'destory']);


Route::get('/exportexcel',[ClientController::class,'exportexcel'])->name('exportexcel');



//************************Product*************** */

Route::get('/product',[ProductController::class,'index'])->name('product');

//*************************************** */

Route::get('/product/create',[ProductController::class,'create'])->name('createproduct');

//*************************************** */

Route::post('/product/store',[ProductController::class,'store']);

//*************************************** */

Route::get('/product/{id}/edit',[ProductController::class,'edit'])->name('editproduct');


//******************************************* */

Route::put('/product/{id}',[ProductController::class,'update'])->name('updateproduct');;

//******************************************* */

Route::get('/delete/{id}',[ProductController::class,'destory']);

//******************************************* */

Route::get('/export',[ProductController::class,'exportexcel'])->name('export');


//*********************Orders*************************** */

Route::get('/order',[OrderController::class,'index'])->name('order');


//*********************create*************************** */

Route::get('/order/create',[OrderController::class,'create'])->name('createorder');

//*********************store*************************** */

Route::post('/order/store',[OrderController::class,'store'])->name('stororder');

//*************************************** */

Route::get('/order/{id}/edit',[OrderController::class,'edit'])->name('editorder');

//*************************************** */

Route::put('/order/{id}',[OrderController::class,'update'])->name('updateorder');;

//******************************************* */

Route::get('/delete/{id}',[OrderController::class,'destory']);

//******************************************* */

Route::get('/export',[OrderController::class,'exportexcel'])->name('export');

//******************details ************************* */
Route::get('/Invoice/{id}/generateInvoice',[OrderController::class,'invoice'])->name('generateInvoice');

Route::get('/Invoice/{id}/downloadPDF',[OrderController::class,'downloadPDF'])->name('downloadPDF');

Route::get('/sellings',[OrderController::class,'sellings'])->name('sellings');

Route::get('/order/{id}/details',[OrderController::class,'details'])->name('details');

Route::get('/Invoice/ListInvoice',[OrderController::class,'ListInvoice'])->name('ListInvoice');
