<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/Login.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="../Images/Title_logo.png" type="image/x-icon">

    <style>
        /* Custom CSS styles can be added here */
    </style>
</head>
<body>
    <div class="login">
        <div class="items">
            <img src="../public/images/logo_login.svg" alt="" width="40%" style="padding-bottom: 5vh; padding-top:5vh; cursor: pointer;" onclick="window.location.href = 'Index.html';">
            <form style="font-family: Inter; font-size:20px; padding-left: 5vh; width: 80%;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label style="text-align: left;">Username:</label><br>
                <input type="text" name="username" style="height: 4vh;"><br><br>
                <label>Password:</label><br>
                <input type="password" name="password" style="height: 4vh;"><br><br>
                <button type="submit">Log in</button>
            </form>
            <?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = new mysqli("localhost", "root", "root", "fresco");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = md5($password); // You should use stronger hashing algorithms like bcrypt or argon2

    // Prepare SQL statement with parameterized query
    $stmt = $mysqli->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, fetch the row
        $row = $result->fetch_assoc();

        // Trim the passwords to remove leading and trailing whitespace
        $stored_password_trimmed = trim($row["password"]);
        $user_password_trimmed = trim($password);

        // Compare trimmed passwords
        if ($stored_password_trimmed === $user_password_trimmed) {
            // Passwords match, store username in session
            $_SESSION['username'] = $username;

            // Store user ID in session if needed
            $_SESSION['user_id'] = $row['id'];

            // Redirect to Profile.php
            header("Location: Profile.php");
            exit();
        } else {
            echo "<span style='color: red;'>Invalid username or password.</span>";
        }
    } else {
        echo "<span style='color: red;'>Invalid username or password.</span>";
    }

    $stmt->close();
    $mysqli->close();
}
?>

            <span class="register_span">Don't have an account? <a href="Register.php">Register</a></span>
                
        </div>
        <span class="rights_span">All rights reserved. ©</span>
    </div>
</body>
</html>
