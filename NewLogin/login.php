<?php
// Start session
session_start();

// Sample credentials (for demonstration purposes)
$valid_username = "user";
$valid_password = "password";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable
        $_SESSION['username'] = $username;
        // Redirect to dashboard (or another page)
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Failed</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="login.php" method="POST" id="loginForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <small id="usernameError" class="error-message"></small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <small id="passwordError" class="error-message"></small>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
    <script src="login.js"></script>
</body>
</html>
