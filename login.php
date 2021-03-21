<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <title> Login </title>
  </head>
  <body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $txt = file('user.txt');
    $input = '';

    if($username == ''){
      echo "Type in the username";
    }

    else if ($password == ''){
      echo "Type in the password";
    }

    else {
      for ($num = 0; $num < count($txt); $num++){
        $input = strstr($txt[$num], $username);
        if($input !== false){
          break;
        }
      }


      if($input == ''){
        echo "Username does not exist";
      }

    else {
      $userArr = explode(",", $input);
      $userPass = $userArr[1];

      if ($password != $userPass){
        echo "Password does not match with the username";

      }

      else {
        header("Location: game.html");
      }
    }
  }
    ?>

    <a href = "mainpage.php"> To the mainpage </a>


  </body>
</html>
