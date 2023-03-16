<?php
// Get the form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$reg_number = $_POST['reg_number'];
$program = $_POST['program'];
$year_of_study = $_POST['year_of_study'];
$password = $_POST['password'];

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'root', '', 'students');

// Check for connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the student information into the database
$sql = "INSERT INTO students (first_name, last_name, email, reg_number, program, year_of_study, password) 
        VALUES ('$first_name', '$last_name', '$email', '$reg_number', '$program', '$year_of_study', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
