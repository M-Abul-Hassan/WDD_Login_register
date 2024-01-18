<?php
session_start();
require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
