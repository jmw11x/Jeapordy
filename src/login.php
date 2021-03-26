<?php
    session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "styles.css" type = "text/css">
    <title> Login </title>
  </head>
  <body>
    <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        $file = file('user.txt');
        $input = '';
    if(strcmp($username,"") ==0){
      echo "Type in the username";
      echo '<a href="login.php">TRY AGAIN</a>';
    }else if (strcmp($password, "")== 0){
      echo "Type in the password";
      echo '<a href="login.php">TRY AGAIN</a>';
    }else{
      foreach($file as $line){
        $arr = explode(",", $line);
        if(strcmp($username,$arr[0]) == 0 && strcmp($password, $arr[1])){
           echo '<form action = "jeopardy.php">
           <input class= "button1" type = "submit" name = "register" value = "LETS PLAY!">
         </form>';        
        }
      }
    }
    ?>
  </body>
</html>