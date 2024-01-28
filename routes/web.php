<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;

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


route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');

Route::get('cpanel', function () {
  return view('dashboard.cntrolpanel');
})->name("cntrolpanel");
route::get('/cpanel',[DashboardController::class,'DisplayItems'])->name('cntrolpanel');
route::get('/addgritem',[DashboardController::class,'displayadditemsgroup'])->name('addgritem');
route::get('/additem',[DashboardController::class,'additem'])->name('additem');
route::get('/bills',[DashboardController::class,'bills'])->name('bills');
route::get('/logout',[DashboardController::class,'logout'])->name('logout');

route::get('/checkout',[ItemsController::class,'checkout'])->name('checkout')->middleware('auth');

route::get('/showproduct/{id}',[ItemsController::class,'showproduct'])->name('showproduct');

route::get('/addtocart/{id}',[ItemsController::class,'AddtoCart'])->name('addtocart');

route::post('/updateg',[ItemsController::class,'updateg'])->name('updateg');


route::get('/itemgroup',[ItemsController::class,'GetItemGroup'])->name('itemgroup');
route::get('/item',[ItemsController::class,'GetItems'])->name('item');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::post('/save',[ItemsController::class,'SaveGroupItems'])->name('save');
route::post('/sav',[ItemsController::class,'SaveItems'])->name('sav');
Route::get('/del/{id}',[ItemsController::class,'Del'])->name('del');
Route::get('/delete/{id}',[ItemsController::class,'DeleteItems'])->name('del-item');
  Route::get('/edit/{id}',[ItemsController::class,'Edit'])->name('edit');

  Route::get('/edt/{id}',[ItemsController::class,'EditGroup'])->name('edt');
  Route::post('/updateg',[ItemsController::class,'UpdateGroup'])->name('updateg');

  Route::post('/update',[ItemsController::class,'Update'])->name('update');
