<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillsController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/education', function () {
    return view('pages.education');
});

Route::get('/skills', [SkillsController::class, 'index'])->name('skills.index');
Route::get('/skills/create', [SkillsController::class, 'create'])->name('skills.create');
Route::post('/skills', [SkillsController::class, 'store'])->name('skills.store');

use App\Http\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/experience', function () {
    return view('pages.experience');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
