<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'principles' => [
            ['title' => 'Kolaborasi', 'text' => 'Perubahan kecil direview bersama agar kualitas tetap terjaga.'],
            ['title' => 'Otomasi', 'text' => 'CI memvalidasi setiap perubahan sebelum digabungkan.'],
            ['title' => 'Pembelajaran', 'text' => 'Retrospektif membuat proses pengembangan terus berkembang.'],
        ],
    ]);
});
