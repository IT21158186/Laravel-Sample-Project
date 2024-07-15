<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - My Laravel App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .navbar {
            width: 100%;
            background: #3498db;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
            font-size: 18px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }

        h1 {
            color: #3498db;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        .time {
            font-size: 24px;
            color: #e74c3c;
        }

        .content {
            text-align: left;
            margin-top: 20px;
        }

        .content h2 {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>
    <div class="container">
        <h1>Welcome to Your Dashboard!</h1>
        <p>Hello, User! Here's what's happening right now:</p>
        <p class="time">Current time: {{ date('Y-m-d H:i:s') }}</p>
        <div class="content">
            <h2>Dashboard Overview</h2>
            <p>Here you can see your latest activities, stats, and other important information.</p>
           
        </div>
    </div>
</body>
</html>
