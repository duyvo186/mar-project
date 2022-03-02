<?php

use App\Http\Controllers\frontend\ordercontroller as frontencontroller;
use App\Http\Controllers\backend\categorycontroller;
use App\Http\Controllers\backend\customercontroller;
use App\Http\Controllers\backend\newscontroller;
use App\Http\Controllers\backend\ordercontroller;
use App\Http\Controllers\backend\productcontroller;
use App\Http\Controllers\backend\suppliercontroller;
use App\Http\Controllers\backend\usercontroller;
use App\Http\Controllers\backend\ChartController;
use App\Http\Controllers\backend\DashController;
use App\Http\Controllers\frontend\aboutus;
use App\Http\Controllers\frontend\ajaxcontroller;
use App\Http\Controllers\frontend\blogcontroller;
use App\Http\Controllers\frontend\contact;
use App\Http\Controllers\frontend\giohangcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\cayanquacontroller;
use App\Http\Controllers\frontend\caybongmatcontroller;
use App\Http\Controllers\frontend\caytrongtrongnuoccontroller;
use App\Http\Controllers\frontend\caycongtrinhcontroller;
use App\Http\Controllers\frontend\caybonsaicontroller;
use App\Http\Controllers\frontend\caynoithatcontroller;

//use App\Http\Controllers\frontend\productsinglecontroller;
use App\Http\Controllers\frontend\psingle;
use App\Http\Controllers\frontend\ratingcontroller;
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
    Route::get('/minicart', [ajaxcontroller::class, 'minicart'])->name('f.minicart');
    Route::post('/form', [ajaxcontroller::class, 'smform'])->name('f.f11');
    Route::get('/form2', [ajaxcontroller::class, 'form2'])->name('f.f2');
    Route::post('/form2', [ajaxcontroller::class, 'smform2'])->name('f.f22');


    Route::get('/sendmail', [homecontroller::class, 'testmail'])->name('f.testmail');
    Route::post('/sendmail', [homecontroller::class, 'sendmail'])->name('f.sendmail');

    Route::get('/', [homecontroller::class, 'index'])->name('f.home');
    Route::get('/cart', [giohangcontroller::class, 'index'])->name('cart.index');
    Route::get('/add-to-cart}', [giohangcontroller::class, 'addtocart'])->name('cart.add');


    Route::post('/update-cart', [giohangcontroller::class, 'update'])->name('cart.update');
    Route::get('/delete-item-{id}', [giohangcontroller::class, 'delitem'])->name('cart.del');

    Route::get('/productsing', [psingle::class, 'themspchitiet'])->name('pg.index');
    // Route::post('/productsing', [psingle::class, 'index'])->name('pg.index');
    Route::post('/add-to-productsing', [psingle::class, 'addtop'])->name('pg.add');

    // Route::get('/', 'App\Http\Controllers\frontend\productsinglecontroller@index')->name('productsingle.index');
    Route::get('/aboutus', [aboutus::class, 'index'])->name('abu.index');
    Route::get('/contact', [contact::class, 'index'])->name('c.index');
    Route::post('/contact', [contact::class, 'submit'])->name('c.submit');
    Route::get('/blog', [blogcontroller::class, 'index'])->name('blog.index');

    Route::get('/blogget', [blogcontroller::class, 'indexdetail'])->name('blog.detail');
    Route::post('/blogdetail', [blogcontroller::class, 'blogdetail'])->name('blog.add');
    Route::post('/add-rating', [ratingcontroller::class, 'add'])->name('rate.add');
    Route::group(['prefix' => 'dssp'], function () {
        Route::get('/caynoithat', [caynoithatcontroller::class, 'index'])->name('nt.index');
        Route::get('/caybonsai', [caybonsaicontroller::class, 'index'])->name('bonsai.index');
        Route::get('/cayanqua', [cayanquacontroller::class, 'index'])->name('anqua.index');
        Route::get('/caytrongtrongnuoc', [caytrongtrongnuoccontroller::class, 'index'])->name('ttn.index');
        Route::get('/caycongtrinh', [caycongtrinhcontroller::class, 'index'])->name('ct.index');
        Route::get('/caybongmat', [caybongmatcontroller::class, 'index'])->name('bm.index');
    });
});
Route::group([], function () {

    // Route::post('/add-to-productsingle', [Productsinglecontroller::class, 'addtocart'])->name('pg.add');
    // Route::post('/update-productsingle', [Productsinglecontroller::class, 'update'])->name('pg.update');
    // Route::get('/delete-item-{id}', [Productsinglecontroller::class, 'delitem'])->name('pg.del');
});
Route::group([], function () {
    Route::get('/checkout', [frontencontroller::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [frontencontroller::class, 'submit'])->name('checkout.submit');
    Route::get('/completed', [frontencontroller::class, 'done'])->name('checkout.done');
});
// Route::group([], function () {
//     route::get('/productsingle', [giohangcontroller::class, 'index']->n
// });

// Route admin panel





Route::group(['prefix' => 'admin'], function () {
    Route::get('/renpass', [usercontroller::class, 'pass'])->name('b.pas');
    Route::get('/login', [usercontroller::class, 'login'])->name('b.login');
    Route::post('/login', [usercontroller::class, 'loginPost'])->name('b.loginpost');
    Route::get('/dashboard', [DashController::class, 'show_dashboard'])->name('dash.index');
    Route::post('/days-order', [DashController::class, 'days_order']);
    Route::post('/days-order-demo', [DashController::class, 'days_order_demo']);
    Route::post('/filter-by-date', [DashController::class, 'filter_by_date']);
    Route::post('/dashboard-filter', [DashController::class, 'dashboard_filter']);


    // cac route se bi kiem tra dang nhap
    Route::group(['middleware' => 'backend.auth'], function () {
        Route::get('/logout', [usercontroller::class, 'logout'])->name('b.logout');

        Route::resource('line-chart', ChartController::class);
        Route::resource('product', productcontroller::class);
        Route::resource('category', categorycontroller::class);
        Route::resource('user', usercontroller::class);
        Route::resource('order', ordercontroller::class);
        Route::resource('supplier', suppliercontroller::class);
        Route::resource('customer', customercontroller::class);
        Route::resource('news', newscontroller::class);
    });
});