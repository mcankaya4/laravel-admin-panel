<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\IndexController as BackendIndex;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Backend\AboutController as BackendAbout;
use App\Http\Controllers\Backend\BreadCrumbController as BackendBreadCrumb;
use App\Http\Controllers\Backend\SliderController as BackendSlider;
use App\Http\Controllers\Backend\PortfolioController as BackendPortfolio;
use App\Http\Controllers\Backend\CategoryController as BackendCategory;
use App\Http\Controllers\Backend\ServiceController as BackendService;

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



Route::middleware('auth')
    ->prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::controller(BackendIndex::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
            });

        Route::prefix('laravel-filemanager')
            ->group(function () {
                \UniSharp\LaravelFilemanager\Lfm::routes();
            });

        Route::controller(BackendService::class)
            ->prefix('service')
            ->as('service.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });

        Route::controller(BackendCategory::class)
            ->prefix('category')
            ->as('category.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });

        Route::controller(BackendPortfolio::class)
            ->prefix('portfolio')
            ->as('portfolio.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/edit/{id}', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });

        Route::controller(BackendSlider::class)
            ->prefix('slider')
            ->as('slider.')
            ->group(function () {
                Route::get('/edit', 'edit')->name('edit');
                Route::post('/update/{id}', 'update')->name('update');
            });

        Route::controller(BackendBreadCrumb::class)
            ->prefix('breadcrumb')
            ->as('breadcrumb.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/destroy/{id}', 'destroy')->name('destroy');
            });

        Route::controller(BackendAbout::class)
            ->prefix('about')
            ->as('about.')
            ->group(function () {
                Route::get('/edit', 'edit')->name('edit');
                Route::post('/update', 'update')->name('update');
                Route::get('/edit-meta', 'editmeta')->name('edit.meta');
                Route::post('/update-meta', 'updatemeta')->name('update.meta');
                Route::get('/edit-skills', 'editskills')->name('edit.skills');
                Route::post('/update-skills', 'updateskills')->name('update.skills');
            });

        Route::controller(BackendUser::class)
            ->prefix('user')
            ->as('user.')
            ->group(function () {
                Route::get('/edit', 'edit')->name('edit');
                Route::get('/editpassword', 'editpassword')->name('edit.password');
                Route::post('/update', 'update')->name('update');
                Route::post('/updatepassword', 'updatepassword')->name('update.password');
            });

    });


require __DIR__ . '/auth.php';
