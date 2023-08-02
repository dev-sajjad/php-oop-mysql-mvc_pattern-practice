<?php
use App\Services\Route;
use App\Middleware\Auth;
use App\Middleware\Guest;

Route::get('', 'HomeController', 'index', 'GET', [Guest::class]);
Route::get('/login', 'LoginController', 'index', 'GET', [Guest::class]);
Route::get('/register', 'RegisterController', 'index', 'GET', [Guest::class]);
Route::get('/logout', 'DashboardController', 'logout', 'GET',);
Route::post('/submit-login', 'LoginController', 'login', 'POST', [Guest::class]);
Route::post('/submit-register', 'RegisterController', 'register', 'POST', [Guest::class]);
Route::get('/dashboard', 'DashboardController', 'index', 'GET', [Auth::class]);