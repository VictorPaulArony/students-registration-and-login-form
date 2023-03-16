<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>change password</title>
</head>
<body>
    <style> 
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

h1 {
  text-align: center;
  margin-top: 0;
}

form {
  max-width: 400px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
  text-align: left;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

.error {
  color: red;
  margin-top: 10px;
  margin-bottom: 0;
}
</style>
<form method="post" action="change_password.php">
      <label>reg_number</label>
      <input type="text" name="reg_number" required>

      <label>Old Password</label>
      <input type="password" name="old_password" required>

      <label>New Password</label>
      <input type="password" name="new_password" required>

      <button type="submit">Change Password</button>
    </form> 
</body>
</html>