<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'projects.index')->name('projects.inex');

Route::view('/project/{project}', 'project.show')->name('projects->show');
