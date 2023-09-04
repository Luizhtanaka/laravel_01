<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\LeadController;
use App\Http\Controllers\Admin\AuthController;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[SiteController::class,'home'])->name('site.home');

Route::post('/leads',[LeadController::class,'createLead'])->name('site.createLead');


Route::group(['prefix'=> 'admin','as' => 'admin.'],function(){
    Route::get('/',[AuthController::class,'login'])->name('login');
    Route::post('/login/do',[AuthController::class,'attempt'])->name('login.do');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');


    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
});

//Route::get('/contato',[SiteController::class,'contact'])->name('site.contact');
//Route::get('/sobre',[SiteController::class,'sobre'])->name('site.sobre');
