<?php 
use  Myweb\Modules\Products\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
Route::group([
    'prefix' => 'admin',
    'middleware' => 'api',
],function()
{
    Route::get('/', [HomeController::class, 'index'])->name("myweb.product::index");
});
