<?php

use App\Http\Livewire\Events;
use App\Models\Event;
use Illuminate\Support\Facades\Route;


Route::get('/eventos', Events::class);

Route::get('/', function () {
    return view('welcome');
});
