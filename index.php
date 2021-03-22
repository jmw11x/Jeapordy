<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href = "style.css">
    <title>Login page</title>
</head>
<body>
  <h1> Jeopardy Login </h1>

  <form action="login.php" method="POST">
    <label for="fname">Username:</label>
    <input class= "box1"type="text" name="username" maxlength = "15" placeholder = "username">
    <br><br>
    <label for="lname">Password:</label>
    <input class= "box1" type="text" name="password" maxlength = "15" placeholder = "password">
    <br><br>
    <input class = "button1" type="submit" value="Login">
  </form>

  <br>
  <a href = "register.php">
    <input class= "button1" type = "submit" name = "register" value = "Register">
  </a>

  <div>
</body>
</html>
