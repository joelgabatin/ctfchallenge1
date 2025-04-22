<?php
session_start();

// Connect to SQLite database
$db = new SQLite3('db.sqlite');

// Get user input
$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable SQL query
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $db->query($query);

// Check if the user is logged in
$row = $result->fetchArray();
if ($row) {
    $_SESSION['success_message'] = "✅ Logged in as <strong>{$row['username']}</strong> (role: {$row['role']})";
    // Redirect to index.html with success message
    header("Location: index.php");
    exit();
} else {
    $_SESSION['error_message'] = "❌ Invalid login. Please try again.";
    // Redirect to index.html with error message
    header("Location: index.php");
    exit();
}
?>
