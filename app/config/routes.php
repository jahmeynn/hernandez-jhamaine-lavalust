<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$config->load('middleware');

/** @var object $router */

$router->get('/', 'Welcome::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/verify', 'StudentController::verify_page');

$router->post('/student/verify', 'StudentController::verify');

$router->get('/student/profile', 'StudentController::profile')
    ->middleware('student');