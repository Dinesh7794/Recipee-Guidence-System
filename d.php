<?php
error_reporting(0);
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "recipe"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert user data into the database
    $sql = "INSERT INTO signup_db (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registered successfully"); window.location.href = "login.php";</script>';
    } else {
        echo '<script>alert("Username is already exists. Please try again."); window.location.href = "signup.php";</script>';
    }

    $conn->close();
}
    
    // Retrieve and display user data from the database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Username: " . $row["username"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Password: " . $row["password"] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "";
    }
    ?>
