<!DOCTYPE html>
<html>
<head>
    <title>My Student Profile</title>

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

        .profile {
            max-width: 750px;
            margin: auto;
            background: white;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        /* Header */
        .header {
            background: #333;
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
        }

        .header p {
            margin: 10px 0 0;
            color: #d8d8d8;
            font-size: 14px;
        }

        /* Main Content */
        .content {
            padding: 35px;
        }

        .section-title {
            margin: 0 0 18px;
            font-size: 20px;
            color: #333;
        }

        /* Personal Information */
        .info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .info-box {
            padding: 16px;
            background: #fafafa;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
        }

        .info-box strong {
            display: block;
            font-size: 12px;
            color: #777;
            margin-bottom: 7px;
            text-transform: uppercase;
        }

        .info-box span {
            font-size: 15px;
        }

        /* About Me */
        .about {
            margin-top: 35px;
            padding-top: 30px;
            border-top: 1px solid #eee;
        }

        .about-card {
            background: #fafafa;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            padding: 22px;
        }

        .about-item {
            margin-bottom: 15px;
        }

        .about-item:last-child {
            margin-bottom: 0;
        }

        .about-item strong {
            display: block;
            font-size: 13px;
            color: #555;
            margin-bottom: 5px;
        }

        .about-item p {
            margin: 0;
            line-height: 1.6;
            font-size: 14px;
            color: #666;
        }

        /* Navigation */
        .navigation {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #eee;
            text-align: center;
        }

        .navigation a {
            display: inline-block;
            min-width: 130px;
            padding: 11px 20px;
            margin: 5px;
            border: 1px solid #333;
            border-radius: 8px;
            background: #333;
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: 0.2s;
        }

        .navigation a:hover {
            background: white;
            color: #333;
        }

        /* Mobile */
        @media (max-width: 600px) {
            .info {
                grid-template-columns: 1fr;
            }

            .content {
                padding: 25px 20px;
            }

            .header h1 {
                font-size: 25px;
            }

            .navigation a {
                display: block;
                width: 100%;
                margin: 8px 0;
            }
        }
    </style>
</head>

<body>

    <div class="profile">

        <!-- Header -->
        <div class="header">
            <h1>Jhamaine's Profile</h1>
        </div>


        <div class="content">

            <!-- Personal Information -->
            <h2 class="section-title">Personal Information</h2>

            <div class="info">

                <div class="info-box">
                    <strong>Student ID</strong>
                    <span>MCC2024-00205</span>
                </div>

                <div class="info-box">
                    <strong>Name</strong>
                    <span>Jhamaine Hernandez</span>
                </div>

                <div class="info-box">
                    <strong>Course</strong>
                    <span>BS Information Technology</span>
                </div>

                <div class="info-box">
                    <strong>Year Level</strong>
                    <span>3rd Year</span>
                </div>

                <div class="info-box">
                    <strong>Section</strong>
                    <span>F5</span>
                </div>

                <div class="info-box">
                    <strong>Email</strong>
                    <span>jhamainehernandez@example.com</span>
                </div>

            </div>


            <!-- About Me -->
            <div class="about">

                <h2 class="section-title">About Me</h2>

                <div class="about-card">

                    <div class="about-item">
                        <strong>Profile Description</strong>
                        <p>
                            I am a BS Information Technology student interested
                            in developing web applications and learning new technologies.
                        </p>
                    </div>

                    <div class="about-item">
                        <strong>Skills</strong>
                        <p>
                            Web Development, Programming, Database Management
                        </p>
                    </div>

                    <div class="about-item">
                        <strong>Hobbies</strong>
                        <p>
                            Gaming, Listening to Music, Watching Movies
                        </p>
                    </div>

                    <div class="about-item">
                        <strong>Address</strong>
                        <p>
                            Mangangan 1, Baco, Oriental Mindoro
                        </p>
                    </div>

                    <div class="about-item">
                        <strong>Contact Number</strong>
                        <p>
                            09919443772
                        </p>
                    </div>

                    <div class="about-item">
                        <strong>Social Media</strong>
                        <p>
                            Jhamaine Hernandez
                        </p>
                    </div>

                </div>

            </div>


            <!-- Navigation -->
            <div class="navigation">

                <a href="<?= site_url('student'); ?>">
                    Home
                </a>

                <a href="<?= site_url('student/profile'); ?>">
                    Student Profile
                </a>

            </div>

        </div>

    </div>

</body>
</html>