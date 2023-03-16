<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $reg_number = $_POST['reg_number'];
  $old_password = $_POST['old_password'];
  $new_password = $_POST['new_password'];

  // connect to the database
  $conn = mysqli_connect('localhost', 'root', '', 'students');

  // check if the reg_number and old password match a user in the database
  $sql = "SELECT * FROM students WHERE reg_number='$reg_number'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if (password_verify($old_password, $row['password'])) {
      // update the password in the database
      $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
      $sql = "UPDATE students SET password='$hashed_password' WHERE reg_number='$reg_number'";
      mysqli_query($conn, $sql);

      echo "Password changed successfully.";
      echo "<br><br>";
      echo "click to login now";
      echo '<a href="login.php"><button>Login </button></a>';
    } else {
      // password change failed
      echo "Incorrect old password.";
      echo "<br><br>";
      echo "click to try again";
      echo '<a href="change.php"><button> Click </button></a>';
    }
  } else {
    // user not found
    echo "User not found.";
    echo "<br><br>";
    echo "click to try again";
    echo '<a href="change.php"><button> Click </button></a>';
  }
}
?>
