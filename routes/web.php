<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ManageComplaints;
use Faker\Provider\Medical;

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
Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

//middleware and Admin panel Routes
Route::group(['middleware'=>'admin_auth'], function()
{
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    Route::get('admin/users_info',[UserController::class,'index']);

    //Complaints Section Routes Route::get('admin/goods/delete_goods/{id}',[GoodController::class,'delete_goods']);
    Route::get('admin/complaints',[ComplaintController::class,'index']);
    Route::get('admin/complaints/manage_complaints',[ComplaintController::class,'manage_complaints']);
    Route::post('admin/complaints/add_complaints_process',[ComplaintController::class,'add_complaints_process'])->name('complaints.insert');
    Route::get('admin/complaints/delete/{id}',[ComplaintController::class,'delete']);

    //Goods Setion Routes
    Route::get('admin/goods',[GoodController::class,'index']);
    Route::get('admin/goods/manage_goods',[GoodController::class,'manage_goods']);
    Route::get('admin/goods/manage_goods/exported_goods',[GoodController::class,'exported_goods']);
    Route::post('admin/goods/manage_goods/add_goods',[GoodController::class,'add_goods'])->name('goods.insert');
    Route::get('admin/goods/delete_goods/{id}',[GoodController::class,'delete_goods']);
    Route::get('admin/goods/manage_goods/{id}',[GoodController::class,'manage_goods']);

    //Luggage Section Routes
    Route::get('admin/luggage',[LuggageController::class,'index']);
    Route::get('admin/luggage/manage_luggage',[LuggageController::class,'manage_luggage']);
    Route::post('admin/luggage/mannage_luggage_process',[LuggageController::class,'mannage_luggage_process'])->name('mannage_luggage_process');
    Route::get('admin/luggage/delete/{id}',[LuggageController::class,'delete']);


    //Report Section Routes
    Route::get('admin/medical_reports',[ReportController::class,'index']);
    Route::get('admin/medical_reports/manage_medical_reports', [ReportController::class, 'manage_medical_reports']);
    Route::post('admin/medical_reports/manage_medical_reports',[ReportController::class,'manage_medical_reports'])->name('manage_medical_reports_process');
    // Logut Functionality
     Route::get('admin/logout', function ()
        {
            session()->forget('ADMIN_LOGIN');
            session()->forget('ADMIN_ID');
            return redirect('admin');
        });


     Route::get('admin/update',[AdminController::class,'updatepassword']);

});

//Users Route

