<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
            text-align: center;
        }
        .welcome-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .welcome-container h1 {
            color: #00796b;
            font-size: 32px;
            margin-bottom: 15px;
        }
        .welcome-container p {
            color: #555;
            font-size: 18px;
            margin: 5px 0;
        }
        .welcome-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .welcome-container button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to IPT10</h1>
        <p>Name: ADDURU</p>
        <p>Email: ADDURU@gmail.com</p>
        <button onclick="window.location.href='/dashboard'">Go to Dashboard</button>
    </div>
</body>
</html>
