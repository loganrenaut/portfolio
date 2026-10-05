<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [ 
        'name' => 'Logan Renaut',
        'competences' => ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'Tailwind CSS'],
        'available' => true
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'À propos . Portfolio'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact . Portfolio'
    ]);
});
