<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [ 
        'name' => 'Logan',
        'competences' => ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'Tailwind CSS', 'HTML', 'CSS'],
        'available' => true
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'À propos . Portfolio'
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact . Portfolio'
    ]);
})->name('contact');
