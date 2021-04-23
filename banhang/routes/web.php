<?php

use App\Http\Controllers\backend\categorycontroller;
use App\Http\Controllers\backend\customercontroller;
use App\Http\Controllers\backend\ordercontroller;
use App\Http\Controllers\backend\productcontroller;
use App\Http\Controllers\backend\suppliercontroller;
use App\Http\Controllers\backend\usercontroller;
use App\Http\Controllers\frontend\aboutus;
use App\Http\Controllers\frontend\ajaxcontroller;
use App\Http\Controllers\frontend\blogcontroller;
use App\Http\Controllers\frontend\contact;
use App\Http\Controllers\frontend\giohangcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\ordercontroller as FrontendOrdercontroller;
//use App\Http\Controllers\frontend\productsinglecontroller;
use App\Http\Controllers\frontend\psingle;
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

Route::group([], function () {
    Route::get('/form', [ajaxcontroller::class, 'form'])->name('f.f1');
    Route::post('/form', [ajaxcontroller::class, 'smform'])->name('f.f11');
    Route::get('/form2', [ajaxcontroller::class, 'form2'])->name('f.f2');
    Route::post('/form2', [ajaxcontroller::class, 'smform2'])->name('f.f22');


    Route::get('/sendmail', [homecontroller::class, 'testmail'])->name('f.testmail');
    Route::post('/sendmail', [homecontroller::class, 'sendmail'])->name('f.sendmail');

    Route::get('/', [homecontroller::class, 'index'])->name('f.home');
    Route::get('/cart', [giohangcontroller::class, 'index'])->name('cart.index');
    Route::post('/add-to-cart}', [giohangcontroller::class, 'addtocart'])->name('cart.add');
    Route::post('/update-cart', [giohangcontroller::class, 'update'])->name('cart.update');
    Route::get('/delete-item-{id}', [giohangcontroller::class, 'delitem'])->name('cart.del');

    Route::get('/productsing', [psingle::class, 'index'])->name('pg.index');
    Route::post('/add-to-productsing', [psingle::class, 'addtop'])->name('pg.add');
    //Route::post('/add-to-productsing', [psingle::class, 'addtop'])->name('pg.add');
    // Route::get('/', 'App\Http\Controllers\frontend\productsinglecontroller@index')->name('productsingle.index');
    Route::get('/aboutus', [aboutus::class, 'index'])->name('abu.index');
    Route::get('/contact', [contact::class, 'index'])->name('c.index');
    Route::post('/contact', [contact::class, 'submit'])->name('c.submit');
    Route::get('/blog', [blogcontroller::class, 'index'])->name('blog.index');
});
Route::group([], function () {

    // Route::post('/add-to-productsingle', [Productsinglecontroller::class, 'addtocart'])->name('pg.add');
    // Route::post('/update-productsingle', [Productsinglecontroller::class, 'update'])->name('pg.update');
    // Route::get('/delete-item-{id}', [Productsinglecontroller::class, 'delitem'])->name('pg.del');
});
Route::group([], function () {

    Route::get('/checkout', [FrontendOrdercontroller::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [FrontendOrdercontroller::class, 'submit'])->name('checkout.submit');
    Route::get('/completed', [FrontendOrdercontroller::class, 'done'])->name('checkout.done');
});
// Route::group([], function () {
//     route::get('/productsingle', [giohangcontroller::class, 'index']->n
// });

// Route admin panel
Route::group(['prefix' => 'admin'], function () {
    Route::get('/renpass', [usercontroller::class, 'pass'])->name('b.pas');
    Route::get('/login', [usercontroller::class, 'login'])->name('b.login');
    Route::post('/login', [usercontroller::class, 'loginPost'])->name('b.loginpost');

    //cac route se bi kiem tra dang nhap
    Route::group(['middleware' => 'backend.auth'], function () {

        Route::get('/logout', [usercontroller::class, 'logout'])->name('b.logout');
        Route::resource('product', productcontroller::class);
        Route::resource('category', categorycontroller::class);
        Route::resource('user', usercontroller::class);
        Route::resource('order', ordercontroller::class);
        Route::resource('supplier', suppliercontroller::class);
        Route::resource('customer', customercontroller::class);
    });
});