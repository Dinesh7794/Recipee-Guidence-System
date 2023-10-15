<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$username = "";
$password = "";
$errorMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute a SELECT query to check the username and password
    $sql = "SELECT * FROM signup_db WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password); // You should hash the password for security
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching record was found
    if ($result->num_rows === 1) {
        $errorMessage = '<script>alert("successfully login.."); window.location.href = "home.php";</script>';
    } else {
        $errorMessage = '<script>alert("Invalid username or password. Please try again."); window.location.href = "login.php";</script>';
    }

    // Close the database connection
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php echo $errorMessage; ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="container">
      <label for="username"><b>Username :</b></label>
      <input type="text" placeholder="Enter Username" id="username" name="username" required><br>
      <label for="password"><b>Password :</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required><br>
      <button type="submit" ><a href="home.html">Login</a></button><br>
      <p>Don't have an account ? <a href="signup.php">Sign Up</a></p>
      <a href="forgot.php">forgot password</a>
    </div>
    <div class="container">
    </div>
  </form>
</body>
</html>