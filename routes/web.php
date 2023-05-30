<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubserviceController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\SubportfolioController;
use App\Http\Controllers\BlogsController;
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

Route::get("/",[HomeController::class,'Home']);
Route::get("/team",[TeamController::class,'Team']);
Route::get("/artical",[ArticalController::class,'Artical']);
Route::get("example" , 'ExampleController@example_fun');
Route::get('/form', [ContactController::class, 'Form']);
//Route::post('/contact', 'ContactController@mailContactForm');

Route::post('/contact', [ContactController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/service/{slug}', [SubserviceController::class, 'Subservice']);
Route::get('/contact-us', [ContactusController::class, 'Contactus']);

Route::get('/aboutus', [AboutusController::class, 'Aboutus']);
Route::get('/portfolio', [SubportfolioController::class, 'Subportfolio']);


Route::get('/Subservice', function () {
   return view('Subservice');
});

Route::post('/Contectus', [ContactusController::class, 'Contectus'])->name('contactus.store');

Route::post('/Contectus', function () {
   return view('Contectus');
});

Route::get('/about-us', function () {
   return View('aboutus');
});

  

  Route::get('/blogs', [BlogsController::class, 'blogs']);
  Route::get('/blogs-detail/{slug}', [BlogsController::class, 'BlogsDetail']);
