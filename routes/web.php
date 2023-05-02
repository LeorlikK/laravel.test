<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
// Admin
Route::prefix('admin')->name('admin.')->middleware('admin_panel')->group(function (){
    Route::get('/', \App\Http\Controllers\Admin\AdminController::class)->name('admin.index');
    // Glasses
    Route::get('/glasses', \App\Http\Controllers\Admin\GlassesAllAdminController::class)->name('glasses');
    Route::get('/read/{item}/{page}', App\Http\Controllers\Admin\GlassesReadAdminController::class)->name('glasses_read');
    Route::get('/glasses/create', App\Http\Controllers\Admin\GlassesCreateAdminController::class)->name('glasses_create');
    Route::post('/glasses/create', App\Http\Controllers\Admin\GlassesCreatePostAdminController::class)->name('glasses_create_post');
    Route::get('/glasses/update/{item}/{page}', Controllers\Admin\GlassesUpdateAdminController::class)->name('glasses_update');
    Route::patch('/glasses/update/{patch}/{page}', Controllers\Admin\GlassesUpdatePatchAdminController::class)->name('glasses_update_patch');
    Route::delete('/glasses/delete/{patch}', Controllers\Admin\GlassesDeleteAdminController::class)->name('glasses_delete');
    // Brand
    Route::get('/brands', \App\Http\Controllers\Admin\BrandsAllAdminController::class)->name('brands');
    Route::get('/brands/read/{brand}/{page}', \App\Http\Controllers\Admin\BrandsReadAdminController::class)->name('brands_read');
    Route::get('/brands/create/', \App\Http\Controllers\Admin\BrandsCreateAdminController::class)->name('brands_create');
    Route::post('/brands/create/', \App\Http\Controllers\Admin\BrandsCreatePostAdminController::class)->name('brands_create_post');
    Route::get('/brands/{brand}{page}/update', \App\Http\Controllers\Admin\BrandsUpdateAdminController::class)->name('brands_update');
    Route::patch('/brands/update/{patch}/{page}', \App\Http\Controllers\Admin\BrandsUpdatePatchAdminController::class)->name('brands_update_patch'); // put/patch
    Route::delete('/brands/delete/{patch}', \App\Http\Controllers\Admin\BrandsDeleteAdminController::class)->name('brands_delete');
    // Categories
    // Users
    Route::get('/users', \App\Http\Controllers\Admin\UsersAllAdminController::class)->name('users');
    Route::patch('/users/{patch}', \App\Http\Controllers\Admin\UsersStateAdminController::class)->name('users_state');

});
// Index
Route::get('/', function () {
    return view('index.index');
});
// About
Route::get('/about', function () {
    return view('about.about');
});
// Contact
Route::get('/contact', function () {
    return view('contact.contact');
});
// Glasses
Route::prefix('glasses')->group(function (){
    Route::get('/', \App\Http\Controllers\Glasses\GetAllController::class)->name('get_all');
    Route::get('/my', \App\Http\Controllers\Glasses\GetAllPaginatorMyController::class)->name('get_all_my');
    Route::get('/template', \App\Http\Controllers\Glasses\GetAllPaginatorTemplateController::class)->name('get_all_template');
    Route::get('/scroll', \App\Http\Controllers\Glasses\GetAllScrollController::class)->name('get_all_scroll');

    Route::get('/read/{item}/{page}', \App\Http\Controllers\Glasses\ReadController::class)->name('glasses_read');

    Route::get('/create', \App\Http\Controllers\Glasses\CreateController::class)->name('glasses_create_get');
    Route::post('/create', \App\Http\Controllers\Glasses\CreatePostController::class)->name('glasses_create_post');

    Route::get('/{item}{page}/update', \App\Http\Controllers\Glasses\UpdateController::class)->name('glasses_update_get');
    Route::patch('/update/{patch}/', \App\Http\Controllers\Glasses\UpdatePostController::class)->name('glasses_update_patch'); // put/patch

    Route::delete('/delete/{patch}', \App\Http\Controllers\Glasses\DeleteController::class)->name('glasses_delete');

    Route::get('/data', Controllers\Glasses\DataBaseController::class)->name('database');
});
// Shop
Route::get('/shop', function () {
    return view('shop.shop');
});



Auth::routes();
Route::get('/test_main_page', function () {
    return view('test_main_page');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
