<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Laravel View</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My First Laravel View!</h1>
        <p>This is a simple Laravel application.</p>
        <p class="time">Current time: {{ date('Y-m-d H:i:s') }}</p>
    </div>
</body>
</html>
