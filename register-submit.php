<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name == '') {
      header("Location: error.php");
    }

    $file = fopen('./user.txt', 'a');
    $value = false;
  			while(($buffer = fgets($file)) !== false) {
  				if(strpos($buffer, $name) !== false || preg_match('/[^a-z0-9.#$-]/i', $name)) {
  					header("Location: error.php");
  					$value = true;
  					break;
  				}
  			}
  			fclose($file);

        if(is_numeric($password) == false) {
          header("Location: error.php");
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
      Your registration is complete, <?= $name ?> !
      <br>
      <a href="./mainpage.php"> Log in to play Jeopardy </a>
    </p>


  </body>
</html>
