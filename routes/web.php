<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use Illuminate\Auth\Events\Verified;
use App\Http\Controllers\NewsController;

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


Route::get('/', [HomeController::class, 'index']);
Route::post('/',[HomeController::class,'appointment']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');
Route::post('/home',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('about',[HomeController::class,'aboutview']);
Route::get('/doctors',[DoctorController::class,'doctor']);
Route::post('/doctors',[HomeController::class,'appointment']);
Route::get('/contact',[HomeController::class,'contactview']);
Route::post('/contact',[HomeController::class,'storecontact']);
Route::get('/news',[NewsController::class,'shownews']);
Route::get('/news_details/{id}',[NewsController::class,'newsdetails']);
Route::get('/news_details',[NewsController::class,'latestnews']);



//Admin Panel
Route::get('add_doctor_view',[AdminController::class,'addview']);
Route::post('add_doctor_view',[AdminController::class,'upload']);
Route::get('show_appointments',[AdminController::class,'showappointments']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);
Route::get('/manage_doctors',[AdminController::class,'managedoctors']);
Route::get('/delete_doctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/update_doctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/update_doctor/{id}',[AdminController::class,'update']);
Route::get('/add_news',[AdminController::class,'addnews']);
Route::post('/add_news',[AdminController::class,'storenews']);
Route::get('manage_news',[AdminController::class,'managenews']);
Route::get('delete_news/{id}',[AdminController::class,'deletenews']);
Route::get('update_news/{id}',[AdminController::class,'updatenews']);
Route::post('update_news/{id}',[AdminController::class,'updatenewsdata']);
Route::get('showcontacts',[AdminController::class,'showcontacts']);
Route::get('all_users',[AdminController::class,'showusers']);
Route::get('delete_user/{id}',[AdminController::class,'deleteuser']);
Route::get('update_user/{id}',[AdminController::class,'updateuser']);
Route::post('update_user/{id}',[AdminController::class,'updateuserinfo']);
Route::get('/search/doctor', [DoctorController::class, 'searchdoctor']);
Route::get('search/patient',[AdminController::class,'searchpatient']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
