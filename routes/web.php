<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
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

// Route::fallback(function () {
//     return view('front.404'); // Replace 'errors.404' with the path to your custom 404 error view
// });



Route::get('/', 'IndexController@index')->name('index');

Route::get('about', 'IndexController@about')->name('about');
Route::get('services', 'IndexController@services')->name('services');
Route::get('service/{slug}', 'IndexController@service')->name('service');
Route::get('projects', 'IndexController@projects')->name('projects');
Route::get('project/{slug}', 'IndexController@project')->name('project');
Route::get('blogs', 'IndexController@blogs')->name('blogs');
Route::get('blog/{slug}', 'IndexController@blog')->name('blog');
Route::post('/contact', 'IndexController@send')->name('send');
Route::get('contact', 'IndexController@contact')->name('contact');
Route::get('resume/download', 'IndexController@download')->name('resume.download');
Route::get('{slug}', 'IndexController@page')->name('page');

Route::get('faq', 'IndexController@faqs')->name('faq');
