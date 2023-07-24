<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class);

Route::get('/posts', \App\Livewire\ShowPosts::class);

Route::get('/posts/{id}', \App\Livewire\ShowPost::class);
