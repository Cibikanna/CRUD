<?php

use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/',[studentcontroller::class,'form'])->name('layout-form');

Route::post('upload',[studentcontroller::class,'dataInsert'])->name('layout-upload');

Route::get('/table',[studentcontroller::class,'display'])->name('show-table');

Route::get('student/edit/{id}',[studentcontroller::class,'edit'])->name('student-edit');

Route::put('/update/{id}',[studentcontroller::class,'update'])->name('student-update');

Route::delete('/delete/{id}',[studentcontroller::class,'delete'])->name('student-delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/wel',function()
{
return view('layouts.app');
});
