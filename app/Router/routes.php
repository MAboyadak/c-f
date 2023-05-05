<?php

use App\Controllers\ContactController;
use App\Router\Router;

Router::get('/contact', [ContactController::class, 'showForm']);
Router::get('/messages', [ContactController::class, 'getMessages']);
Router::post('/contact', [ContactController::class, 'storeMessage']);

?>