<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name("index");
Route::get('/add', [ItemController::class, "add"])->name("add");
Route::post('/addProcess', [ItemController::class, "addProcess"])->name("addProcess");