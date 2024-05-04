<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

// Route::get('photos', function () {
//     return view('photos.index');
// });

// Route::get('photos/show', function () {
//     return view('photos.show');
// });

// Route::get('photos/create', function () {
//     return view('photos.create');
// });


Route::resource('photos', PhotoController::class);
