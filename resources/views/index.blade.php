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
            cursor: pointer;
        }

        h1 {
            color: #3498db;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

    </style>
    <script>
        function redirectToDashboard() {
            window.location.href = '/dashboard';
        }
    </script>
</head>
<body>
    <div class="container" onclick="redirectToDashboard()">
        <h1>Welcome to My First Laravel Application!</h1>
        <p>Click here to start..</p>
    </div>
</body>
</html>

