<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (
            isset($_COOKIE['student_verified']) &&
            $_COOKIE['student_verified'] === 'yes'
        ) {
            return $next();
        }

        redirect('student/verify');
    }
}