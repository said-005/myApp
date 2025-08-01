<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return File::get(public_path('index.html'));
});
require __DIR__.'/auth.php';
Route::get('/{any}', function () {
    return File::get(public_path('index.html'));
})->where('any', '^(?!login$|logout$).*$');
