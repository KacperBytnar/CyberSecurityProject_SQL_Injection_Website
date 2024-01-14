?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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

        .welcome-container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-container h2 {
            text-align: center;
            color: #333;
        }

        .welcome-content {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .logout-button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .admin-buttons {
            margin-top: 20px;
        }

        .admin-button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }

        .warning-button {
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
        <h1>Welcome to the Admin Panel</h1>
        <img src="wsiz.png" alt="School Logo">
    </header>
    <div class="welcome-container">
        <h2>Welcome, <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : 'Guest'; ?>!</h2>
        <div class="welcome-content">
            <div class="admin-buttons">
                <button class="admin-button">Admin Button 1</button>
                <button class="admin-button">Admin Button 2</button>
                <!-- Add more admin functionality buttons as needed -->
            </div>
        </div>

        <form action="logout.php" method="post">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>

    <div class="warning-button">
        <p style="font-size:32px"><strong>Warning!</strong> Unauthorized admin access via SQL INJECTION detected!</p>
    </div>

    <footer>
        UITM, Cybersecurity Essentials, Kacper Bytnar w70364
    </footer>
</body>
</html>