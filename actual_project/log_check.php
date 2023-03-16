<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $reg_number = $_POST['reg_number'];
  $password = $_POST['password'];

  // connect to the database
  $conn = mysqli_connect('localhost', 'root', '', 'students');

  // check if the reg_number exists in the database
  $sql = "SELECT password FROM students WHERE reg_number='$reg_number'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    // reg_number exists, check the password
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];
    if (password_verify($password, $hashed_password)) {
      // login successful
      session_start();
      $_SESSION['reg_number'] = $reg_number;
      echo "<script>window.location.href='home.html';</script>";
      exit();
    } else {
      // password incorrect
      echo "Invalid password.";
      echo "<br><br>";
  echo '<a href="login.php"><button>Try Again</button></a>';
    }
  } else {
    // reg_number not found
    echo "Invalid reg number.";
    echo "<br><br>";
  echo '<a href="login.php"><button>Try Again</button></a>';
  }

  // close the database connection
  mysqli_close($conn);
}

?>
