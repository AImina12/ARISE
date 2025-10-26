<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            position: relative;
        }

        .login-container {
            background-color: rgba(20, 20, 20, 0.95);
            padding: 30px 40px;
            border: 2px solid #ff0000;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
            width: 400px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid #ff0000;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
        }

        /* STYLES FOR THE LOGIN BUTTON */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            /* Button background is red */
            background-color: #ff0000; 
            /* Button font is white */
            color: #fff; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
            font-family: 'Montserrat', sans-serif; /* Ensure it uses the custom font */
        }

        button[type="submit"]:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
        /* END STYLES */

        .error-message {
            color: #ff0000;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .returnButton {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 4.3rem;
            padding: 10px 20px;
            background-color: rgba(20, 20, 20, 0.95);
            color: #fff;
            border: 2px solid #ff0000;
            border-radius: 5px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <h1>Login Form</h1>
        <form id="loginForm" method="POST" action="login.php">
            <div class="form-group">
                <label for="username">Username *</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                <div class="error-message" id="usernameError"></div>
            </div>

            <div class="form-group">
                <label for="password">Password *</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <div class="error-message" id="passwordError"></div>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
    <a href="index.html" class="returnButton">Return</a>
</body>
</html>
