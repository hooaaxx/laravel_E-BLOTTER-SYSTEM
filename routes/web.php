<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProvincialBlotterController;
use App\Http\Controllers\User\BlotterController;
use App\Http\Controllers\Brgy\PendingController;
use App\Http\Controllers\Brgy\ApprovedController;
use App\Http\Controllers\Brgy\CaseClosedController;
use App\Http\Controllers\Brgy\ReviveController;
use App\Http\Controllers\Municipal\MunicipalBlotterController;
use App\Http\Controllers\Municipal\BrgyBlotterController;
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

//USER DASHBOARD
Route::middleware(['auth','verified', 'role:user'])->name('dashboard.')->prefix('dashboard')->group(function () {
    Route::get('/', [BlotterController::class, 'index'])->name('index');
    Route::get('/view-blotter', [BlotterController::class, 'view'])->name('view');
    
    Route::resource('/blotter', BlotterController::class);
    Route::put('blotter/{id}/pass', [BlotterController::class, 'pass'])->name('blotter.pass');
    //BRGY BLOTTER PDF GENERATOR
    Route::get('blotter/downloadPDF/{id}', [BlotterController::class, 'downloadPDF'])->name('blotter.pdf');
    //MUNICIPAL BLOTTER PDF GENERATOR
    Route::get('blotter/downloadmunicipalPDF/{id}', [BlotterController::class, 'downloadmunicipalPDF'])->name('municipalblotter.pdf');
    //FILE TO ACTION PDF GENERATOR
    Route::get('blotter/fileActionPDF/{id}', [BlotterController::class, 'fileActionPDF'])->name('fileaction.pdf');
});

//ADMIN DASHBOARD
Route::middleware(['auth', 'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    //ROLES
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    
    //PERMISSIONS
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    
    //USERS MANAGEMENT
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    //PROVINCIAL BLOTTER
    Route::resource('/provincialblotter', ProvincialBlotterController::class);
    //MUNICIPAL BLOTTER PDF GENERATOR
    Route::get('provincialblotter/downloadPDF/{id}', [ProvincialBlotterController::class, 'downloadPDF'])->name('provincialblotter.pdf');
});


//MUNICIPAL DASHBOARD
Route::middleware(['auth', 'verified', 'role:municipal'])->name('municipal.')->prefix('municipal')->group(function () {
    Route::get('/', [IndexController::class, 'MunicipalIndex'])->name('index');

    //BRGY BLOTTER
    Route::resource('/brgyblotter', BrgyBlotterController::class);
    Route::put('brgyblotter/{id}/pass', [BrgyBlotterController::class, 'pass'])->name('brgyblotter.pass');
    //BRGY BLOTTER PDF GENERATOR
    Route::get('brgyblotter/downloadPDF/{id}', [BrgyBlotterController::class, 'downloadPDF'])->name('brgyblotter.pdf');
    //FILE TO ACTION PDF GENERATOR
    Route::get('brgyblotter/fileActionPDF/{id}', [BrgyBlotterController::class, 'fileActionPDF'])->name('brgyfileaction.pdf');

    //MUNICIPAL BLOTTER
    Route::resource('/municipalblotter', MunicipalBlotterController::class);
    Route::put('municipalblotter/{id}/pass', [MunicipalBlotterController::class, 'pass'])->name('municipalblotter.pass');
    //MUNICIPAL BLOTTER PDF GENERATOR
    Route::get('municipalblotter/downloadPDF/{id}', [MunicipalBlotterController::class, 'downloadPDF'])->name('municipalblotter.pdf');
});

//BRGY DASHBOARD
Route::middleware(['auth', 'verified', 'role:brgy'])->name('brgy.')->prefix('brgy')->group(function () {
    Route::get('/', [IndexController::class, 'BrgyIndex'])->name('index');

    //PENDING BLOTTER
    Route::resource('/pending', PendingController::class);
    Route::put('pending/{id}/approve', [PendingController::class, 'approve'])->name('pending.approve');
    //APPROVED BLOTTER
    Route::resource('/approved', ApprovedController::class);
    Route::put('approved/{id}/pass', [ApprovedController::class, 'pass'])->name('approved.pass');
    Route::put('approved/{id}/close', [ApprovedController::class, 'close'])->name('approved.close');
    //APPROVED PDF GENERATOR
    Route::get('approved/downloadPDF/{id}', [ApprovedController::class, 'downloadPDF'])->name('approved.pdf');
    //CASE CLOSED BLOTTER
    Route::resource('/case-closed', CaseClosedController::class);
    Route::put('case-closed/{id}/revive', [CaseClosedController::class, 'revive'])->name('case-closed.revive');
    //CASE CLOSED PDF GENERATOR
    Route::get('case-closed/downloadPDF/{id}', [CaseClosedController::class, 'downloadPDF'])->name('case-closed.pdf');
    //REVIVE BLOTTER
    Route::resource('/revive', ReviveController::class);
    Route::put('revive/{id}/pass', [ReviveController::class, 'pass'])->name('revive.pass');
    Route::put('revive/{id}/close', [ReviveController::class, 'close'])->name('revive.close');
    //REVIVE PDF GENERATOR
    Route::get('revive/downloadPDF/{id}', [ReviveController::class, 'downloadPDF'])->name('revive.pdf');
});


require __DIR__.'/auth.php';
