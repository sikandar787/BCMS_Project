<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\GoodController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ManageComplaints;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PaymentController;
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
    return view('test');
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
    Route::post('admin/complaints/add_complaints',[ComplaintController::class,'add_complaints'])->name('add_complaints');
    Route::get('admin/complaints/delete/{id}',[ComplaintController::class,'delete']);
    Route::get('admin/complaints/manage_complaints/{id}',[ComplaintController::class,'manage_complaints']);
    Route::get('admin/complaints/status/{id}',[ComplaintController::class,'status']);

    //Goods Setion Routes
    Route::get('admin/goods',[GoodController::class,'index']);
    Route::get('admin/goods/manage_goods',[GoodController::class,'manage_goods']);
    Route::get('admin/goods/manage_goods/exported_goods',[GoodController::class,'exported_goods']);
    Route::post('admin/goods/manage_goods/add_goods',[GoodController::class,'add_goods'])->name('add_goods');
    Route::get('admin/goods/delete_goods/{id}',[GoodController::class,'delete_goods']);
    Route::get('admin/goods/manage_goods/{id}',[GoodController::class,'manage_goods']);

    //Luggage Section Routes
    Route::get('admin/luggage',[LuggageController::class,'index']);
    Route::get('admin/luggage/manage_luggage',[LuggageController::class,'manage_luggage']);
    Route::post('admin/luggage/add_luggage',[LuggageController::class,'add_luggage'])->name('add_luggage');
    Route::get('admin/luggage/manage_luggage/{id}',[LuggageController::class,'manage_luggage']);
    Route::get('admin/luggage/delete/{id}',[LuggageController::class,'delete']);

    // Department Section Routes

    Route::get('admin/department',[DepartmentController::class,'index']);
    Route::get('admin/departments/manage_departments',[DepartmentController::class,'manage_departments']);
    Route::post('admin/departments/add_departments',[DepartmentController::class,'add_departments'])->name('add_departments');
    Route::get('admin/departments/delete/{id}',[DepartmentController::class,'delete']);
    Route::get('admin/departments/manage_departments/{id}',[DepartmentController::class,'manage_departments']);

    //Report Section Routes
    Route::get('admin/medical_reports',[ReportController::class,'index']);
    Route::get('admin/medical_reports/manage_medical_reports', [ReportController::class, 'manage_medical_reports']);
    Route::post('admin/medical_reports/store',[ReportController::class,'store'])->name('store');
    Route::get('admin/medical_reports/delete/{id}',[ReportController::class,'delete']);
    Route::get('admin/view_report/{id}',[ReportController::class,'view_report']);




    // Route::get('admin/medical_reports/view/{id}',[ReportController::class,'view']);

    //Payment Section Routes
    Route::get('admin/payments',[PaymentController::class,'index']);


    // Logut Functionality

    //
     Route::get('admin/logout', function ()
        {
            session()->forget('ADMIN_LOGIN');
            session()->forget('ADMIN_ID');
            return redirect('admin');
        });


     Route::get('admin/update',[AdminController::class,'updatepassword']);

});

//Users Route

