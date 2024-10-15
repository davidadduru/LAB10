<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e0f7fa;
            margin: 0;
        }
        .form-container {
            width: 100%;
            max-width: 450px;
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #00796b;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border 0.3s;
        }
        .form-container input:focus {
            border: 2px solid #00796b;
            outline: none;
        }
        .form-container button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 18px;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #004d40;
        }
        .form-container p {
            margin-top: 20px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="/login" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/register" style="color: #00796b; text-decoration: none;">Register here</a></p>
    </div>
</body>
</html>
