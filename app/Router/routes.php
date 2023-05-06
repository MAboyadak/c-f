<?php

use App\Controllers\ContactController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\RegisterController;
use App\Router\Router;

// Contact
Router::get('/contact', [ContactController::class, 'showForm']);
Router::get('/messages', [ContactController::class, 'getMessages']);
Router::post('/contact', [ContactController::class, 'storeMessage']);

// Auth
Router::get('/register', [RegisterController::class, 'showRegisterForm']);
Router::post('/register', [RegisterController::class, 'createNewUser']);

Router::get('/login', [LoginController::class, 'showLoginForm']);
Router::post('/login', [LoginController::class, 'loginUser']);

Router::post('/logout', [LogoutController::class, 'logout']);


?>