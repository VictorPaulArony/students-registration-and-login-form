

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chuka University Student Portal Activation Form</title>
	<link rel="stylesheet" href="register.css">
</head>
<body>
<h2>Chuka University Student Portal Activation Form</h2>
<form action="reg_check.php" method="POST">
  <h2>Chuka University Student Registration Form</h2>
  
  <label for="first_name">First Name:</label>
  <input type="text" id="first_name" name="first_name" required>
  
  <label for="last_name">Last Name:</label>
  <input type="text" id="last_name" name="last_name" required>

  <label for="email">Email Address:</label>
  <input type="email" id="email" name="email" required>

  <label for="reg_number">Registration Number:</label>
  <input type="text" id="reg_number" name="reg_number" required>

  <label for="program">Program:</label>
  <input type="text" id="program" name="program" required>

  <label for="year_of_study">Year of Study:</label>
  <select id="year_of_study" name="year_of_study" required>
    <option value="">Select year of study</option>
    <option value="1">First Year</option>
    <option value="2">Second Year</option>
    <option value="3">Third Year</option>
    <option value="4">Fourth Year</option>
  </select>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Register</button>
</form>

</body>
</html>