<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>

  <form class = "textbox" action="login.php" method="POST">
    <label for="fname">Username:</label>
    <input type="text" name="username">
    <br><br>
    <label for="lname">Password:</label>
    <input type="text" name="password">
    <br><br>
    <input type="submit" value="Login">
  </form>

  <a href = "register.php">
    <input type = "submit" value = "Register">
  </a>

</body>
</html>
