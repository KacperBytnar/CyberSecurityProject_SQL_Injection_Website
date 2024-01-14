<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .login-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-form label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .login-form button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error-message {
            text-align: center;
            margin-top: 20px;
            color: red;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Simple Website for SQL Attack Experiment</h1>
        <img src="wsiz.png" alt="School Logo">

    </header>

    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <div class="error-message">
            <?php
            // Display red text for wrong credentials
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($result) && mysqli_num_rows($result) === 0) {
                echo '<p><strong>Error:</strong> Invalid username or password.</p>';
            }
            ?>
        </div>
    </div>

    <footer>
        UITM, Cybersecurity Essentials, Kacper Bytnar w70364
    </footer>
</body>
</html>