<!DOCTYPE html>
<html>
<head>
    <title>Jhamaine's Profile</title>

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
            max-width: 650px;
            margin: auto;
        }

        .header {
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 20px;
            border-radius: 16px 16px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .header p {
            margin: 8px 0 0;
            color: #ddd;
            font-size: 14px;
        }

        .content {
            background: white;
            padding: 40px 30px;
            text-align: center;
            border-radius: 0 0 16px 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .welcome h2 {
            margin: 0 0 12px;
            font-size: 23px;
        }

        .welcome p {
            margin: 0 auto 30px;
            max-width: 500px;
            color: #666;
            line-height: 1.6;
        }

        .navigation {
            border-top: 1px solid #eee;
            padding-top: 25px;
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
        }

        .navigation a:hover {
            background: white;
            color: #333;
        }

        @media (max-width: 600px) {
            .navigation a {
                display: block;
                width: 100%;
                margin: 8px 0;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <h1>Welcome to My Page</h1>
        </div>

        <div class="content">

            <div class="welcome">
                <h2>Hello!</h2>

                <p>
                    Welcome to my student page.
                    Click below to view my profile.
                </p>
            </div>

            <div class="navigation">
                <a href="<?= site_url('student'); ?>">Home</a>

                <a href="<?= site_url('student/profile'); ?>">
                    Student Profile
                </a>
            </div>

        </div>

    </div>

</body>
</html>