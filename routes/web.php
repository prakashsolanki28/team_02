<?php

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
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('gallery',[App\Http\Controllers\GalleryController::class, 'index']);
Route::get('syllabus',[App\Http\Controllers\SyllabusController::class, 'index']);
Route::get('courses',[App\Http\Controllers\CoursesController::class, 'index']);
Route::get('time-table',[App\Http\Controllers\TimeTableController::class, 'index']);

// admin routes
Route::group(['middleware'=>['auth']], function() 
{
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', function(){return view('admin.dashboard');});
        Route::prefix('gallery')->group(function(){
            Route::get('/',[App\Http\Controllers\GalleryController::class, 'adminIndex']);
            Route::post('add',[App\Http\Controllers\GalleryController::class, 'store']);
            Route::get('delete/{id}',[App\Http\Controllers\GalleryController::class, 'destory']);
        });
        Route::prefix('syllabus')->group(function(){
            Route::get('/',[App\Http\Controllers\SyllabusController::class, 'adminIndex']);
            Route::post('add',[App\Http\Controllers\SyllabusController::class, 'store']);
            Route::get('delete/{id}',[App\Http\Controllers\SyllabusController::class, 'destory']);
        });

        Route::prefix('courses')->group(function(){
            Route::get('/',[App\Http\Controllers\CoursesController::class, 'adminIndex']);
            Route::get('add',[App\Http\Controllers\CoursesController::class, 'store']);
            Route::get('delete/{id}',[App\Http\Controllers\CoursesController::class, 'destory']);
        });

        Route::prefix('time-table')->group(function(){
            Route::get('/',[App\Http\Controllers\TimeTableController::class, 'adminIndex']);
            Route::get('add',[App\Http\Controllers\TimeTableController::class, 'store']);
            Route::get('delete/{id}',[App\Http\Controllers\TimeTableController::class, 'destory']);
        });
    });
});

Route::get('admin/example/form', function(){
    return view('admin.example.form');
});

Route::get('admin/example/dropzone', function(){
    return view('admin.example.dropzone');
});

Route::get('admin/example/datatable', function(){
    return view('admin.example.datatable');
});