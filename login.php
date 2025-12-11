<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="/styles/createacc.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="account-container">
        <header class="account-header">
            <h2>Welcome Back</h2>
            <p>Please enter your credentials to access the dashboard.</p>
        </header>

        <form action="#" method="POST" class="login-form">
            
            <div class="form-group">
                <label for="login-email">Email</label>
                <input type="text" id="login-email" name="email" placeholder="Enter your email or username" required>
            </div>

            <div class="form-group">
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="password" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="login-btn">
                    Log In
                </button>
            </div>

            <p class="login-link">Don't have an account? <a href="/createacc.php">Create One here</a></p>

        </form>
    </div>

</body>
</html>