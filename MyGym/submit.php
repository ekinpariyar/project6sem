<?php
// Retrieve form data
$date = $_POST['date'];
$time = $_POST['time'];
$task = $_POST['task'];
$calories = $_POST['calories'];
$user_id = $_POST['user_id']; // Retrieve user_id from the form data

// Rest of your code for database connection and insertion

$user_id = $_SESSION['user_id']; // Retrieve user_id from the session variable

// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mygym';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO tasks (exercise_date, exercise_time, task, calories, user_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $date, $time, $task, $calories, $user_id);
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect to success page
header("Location: success.html");
exit;
?>
