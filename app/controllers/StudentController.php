<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student/home');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00205',
            'name' => 'Jhamaine Hernandez',
            'course' => 'Bachelor of Science in Information Technology',
            'year' => '3rd Year',
            'section' => 'F5'
        ];

        $this->call->view('student/profile', $student);
    }

    public function verify_page()
    {
        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Profile Access Verification</title>

            <style>
                * {
                    box-sizing: border-box;
                }

                body {
                    margin: 0;
                    padding: 40px 20px;
                    font-family: Arial, sans-serif;
                    background: #f5f6f8;
                    color: #333;
                }

                .container {
                    max-width: 500px;
                    margin: auto;
                    background: white;
                    border-radius: 16px;
                    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
                    overflow: hidden;
                }

                .header {
                    background: #333;
                    color: white;
                    text-align: center;
                    padding: 30px 20px;
                }

                .header h1 {
                    margin: 0;
                    font-size: 26px;
                }

                .header p {
                    margin: 8px 0 0;
                    color: #ddd;
                    font-size: 14px;
                }

                .content {
                    padding: 35px 30px;
                    text-align: center;
                }

                .content h2 {
                    margin-top: 0;
                    font-size: 22px;
                }

                .content p {
                    color: #666;
                    line-height: 1.6;
                    margin-bottom: 25px;
                }

                .option {
                    display: block;
                    text-align: left;
                    padding: 15px;
                    margin-bottom: 12px;
                    border: 1px solid #e5e5e5;
                    border-radius: 10px;
                    cursor: pointer;
                }

                .option:hover {
                    border-color: #333;
                    background: #fafafa;
                }

                .option input {
                    margin-right: 10px;
                }

                button {
                    width: 100%;
                    margin-top: 10px;
                    padding: 12px;
                    border: 1px solid #333;
                    border-radius: 8px;
                    background: #333;
                    color: white;
                    font-size: 14px;
                    cursor: pointer;
                }

                button:hover {
                    background: white;
                    color: #333;
                }

                .back {
                    display: inline-block;
                    margin-top: 20px;
                    color: #666;
                    text-decoration: none;
                    font-size: 14px;
                }

                .back:hover {
                    color: #333;
                    text-decoration: underline;
                }
            </style>
        </head>

        <body>

            <div class="container">

                <div class="header">
                    <h1>PROFILE ACCESS</h1>
                    <p>Student Verification</p>
                </div>

                <div class="content">

                    <h2>Access Verification</h2>

                    <p>
                        Please confirm your access before viewing
                        the student profile.
                    </p>

                    <form method="POST" action="' . site_url('student/verify') . '">

                        <label class="option">
                            <input type="radio"
                                   name="is_student"
                                   value="yes"
                                   required>
                            Yes, allow me to access the profile.
                        </label>

                        <label class="option">
                            <input type="radio"
                                   name="is_student"
                                   value="no">
                            No, return me to the home page.
                        </label>

                        <button type="submit">
                            Continue
                        </button>

                    </form>

                    <a href="' . site_url('student') . '" class="back">
                        ← Back to Home
                    </a>

                </div>

            </div>

        </body>
        </html>
        ';
    }

    public function verify()
    {
        $answer = $_POST['is_student'] ?? '';

        if ($answer === 'yes') {
            setcookie(
                'student_verified',
                'yes',
                time() + 3600,
                '/'
            );

            redirect('student/profile');
            return;
        }

        setcookie(
            'student_verified',
            'no',
            time() + 3600,
            '/'
        );

        redirect('student');
    }
}