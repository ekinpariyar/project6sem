<?php

session_start();
// Retrieve form data
$date = $_POST['date'];
$time = $_POST['time'];
$task = $_POST['task'];
$calory = $_POST['calories'];
$calories = (int)$calory;

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
// $stmt = $conn->prepare("INSERT INTO task (user_id,exercise_date, exercise_time, task, calories) VALUES (?, ?, ?, ?, ?)");
// $stmt->bind_param($user_id ,$date, $time, $task, $calories);
// $stmt->execute();

// $stmt->close();
// $conn->close();

$sql_ins = "INSERT INTO task (user_id, exercise_date, exercise_time ,task, calories) VALUES ('$user_id' ,'$date' , '$time', '$task', '$calories');";
$result1 = mysqli_query($conn , $sql_ins);

// Redirect to success page
header("Location: index.php");
exit;
?>
