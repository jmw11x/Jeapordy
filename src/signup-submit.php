<?php
    session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href ="style.css" type = "text/css">

    <title>Document</title>
</head>
<body>
    <?php
            //add to file
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST["name"]) &&!empty($_POST["age"])){
                $f = 'singles.txt';
                $file = file_get_contents("users.txt");
                $file .= $_POST["name"].",".$_POST["age"] . "\n";
                file_put_contents($f, $file);
                echo "\nThank you for signing up " . $_POST["name"] . " good luck!\n";
                print_r($_SESSION);

                echo '<a href="jeapordy.php">PLAY NOW</a>';
            }else{
                echo "We're sorry. You submitted invalid user information. Please go back and try again\n";
                echo '<a href="index.php">Back to login page</a>';
            }
        }
    ?>

</body>
</html>
