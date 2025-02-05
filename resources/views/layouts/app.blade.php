<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            background: #2196F3;
            color: white;
            padding: 30px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }

        .profile-header h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-content {
            padding: 30px;
        }

        .info-group {
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 4px;
        }

        .label {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .value {
            color: #333;
            font-size: 16px;
            font-weight: 500;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #2196F3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #1976D2;
        }

        .text-center {
            text-align: center;
        }

        footer {
            margin-top: 20px;
            color: #666;
            text-align: center;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @section('content')
            <div class="profile-header">
                <h1>User Profile</h1>
            </div>
            
            <div class="profile-content">
                <div class="info-group">
                    <div class="label">Name</div>
                    <div class="value">{{ $user->name }}</div>
                </div>

                <div class="info-group">
                    <div class="label">Email</div>
                    <div class="value">{{ $user->email }}</div>
                </div>

                <div class="text-center">
                    <a href="#" class="btn">Edit Profile</a>
                </div>
            </div>
        @show
    </div>

    <footer>
        &copy; {{ date('Y') }} Your Application. All rights reserved.
    </footer>
</body>
</html>