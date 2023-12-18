<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/academic/rules', function () {
    return view('pages.academic.rules');
})->name('academic.rules');
Route::get('/admission', function () {
    return view('pages.admission');
})->name('admission');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');
Route::get('/directors', function () {
    return view('pages.directors');
})->name('directors');
Route::get('/about_us', function () {
    return view('pages.about_us');
})->name('about_us');
Route::get('/single-notice',function(){
  return view('pages.single_notice');
})->name('single.notice');
Route::get('/academic/department/science',function(){
    return view('pages.department.science');
  })->name('academic.department.science');
  Route::get('/academic/department/commerce',function(){
    return view('pages.department.commerce');
  })->name('academic.department.commerce');
  Route::get('/academic/department/arts',function(){
    return view('pages.department.arts');
  })->name('academic.department.arts');
  Route::get('/academic/calender',function(){
    return view('pages.academic.calender');
  })->name('academic.calender');
  Route::get('/academic/result',function(){
    return view('pages.academic.result');
  })->name('academic.result');


Route::get('/lang/change',function(Request $request){
   
    // App::setLocale($request->lang);
    session()->put('locale', $request->lang);
    app()->setLocale(session()->get('locale'));
    return redirect()->back();
})->name('lang.change');
