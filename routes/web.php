<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\SiteController;
use App\Http\Controllers\site\LeadController;


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


//Route::get('/contato',[SiteController::class,'contact'])->name('site.contact');
//Route::get('/sobre',[SiteController::class,'sobre'])->name('site.sobre');
