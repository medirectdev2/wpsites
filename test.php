<?php
$servername = "localhost";
$username = "wp_database_user";
$password = "WP_databaseM3d";
$dbname = "wp_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database: $dbname";
?>
