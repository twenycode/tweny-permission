<?php

use Illuminate\Support\Facades\Route;


//  User Roles Roles Routes
Route::prefix('roles/')->name('roles.')->group(function () {
    Route::get('index', [TwenyCode\TwenyPermission\Http\Controllers\RoleController::class,'index'])->name('index');
//    Route::post('store', [App\Http\Controllers\Access\RoleController::class,'store'])->name('store')->middleware('permission:role_create');
//    Route::get('edit/{role}', [App\Http\Controllers\Access\RoleController::class,'edit'])->name('edit')->middleware('permission:role_update');
//    Route::put('update/{role}', [App\Http\Controllers\Access\RoleController::class,'update'])->name('update')->middleware('permission:role_update');
//    Route::delete('destroy/{role}', [App\Http\Controllers\Access\RoleController::class,'destroy'])->name('destroy')->middleware('permission:role_delete');
});
