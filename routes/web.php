<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact/send', [PortfolioController::class, 'sendMail'])->name('contact.send');
Route::get('/projects/habitscore', [PortfolioController::class, 'habitscore'])->name('projects.habitscore');
Route::get('/projects/tokyoji', [PortfolioController::class, 'tokyoji'])->name('projects.tokyoji');
Route::get('/projects/ayanamotor', [PortfolioController::class, 'ayanamotor'])->name('projects.ayanamotor');