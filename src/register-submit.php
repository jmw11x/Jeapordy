<?php
    session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "styles.css" type = text/css>
    <title></title>
  </head>
  <body>
    <?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name == '') {
      header("Location: error.html");
    }

    $fileInfo = '';
    $value = false;
    $file = file("user.txt");
    $i = 0;
    while(count($file) > $i){
      $fileInfo = strstr($file[$i], $name);
      if ($fileInfo !== false){
        break;
      }
      $i++;
    }
    if ($fileInfo != ''){
      header("Location: error.html");
    }

        if(is_numeric($password) == FALSE) {
          header("Location: error.html");
        } else if (!$value){
          $data = $name.",".$password."\n";
          $filePointer = fopen('./user.txt','a');
          fwrite($filePointer, $data);
          fclose($filePointer);

        }
    ?>

    <p>
      <strong> Thank you! </strong>
      <br> <br>
      <h2> Your registration is complete, <?= $name ?> ! </h2>
      <a href="./index.php"><h2> Log in to play Jeopardy </h2></a>
    </p>


  </body>
</html>
