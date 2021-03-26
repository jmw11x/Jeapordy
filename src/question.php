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

<body class = "questionBody">
    <div class = "question">
        <?php
            $_SESSION["guesses"]++;
            if($_POST["category"] . " for " . $_POST["bet"] == "CS for 400"){
                echo "Who invented computers";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "CS for 800"){
                echo "Tabs or spaces";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "CS for 1200"){
                echo "Most used os";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "CS for 1600"){
                echo "Origional name of windows";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "CS for 2000"){
                echo "Name of the first video game";
            } else if($_POST["category"] . " for " . $_POST["bet"] == "sports for 400"){
                echo "Who invented basketball";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "sports for 800"){
                echo "Player with most super bowls";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "sports for 1200"){
                echo "Top college football programs in terms of total wins";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "sports for 1600"){
                echo "First american sporting event";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "sports for 2000"){
                echo "Country with most workd cups";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "world for 400"){
                echo "What south american empire was located in central mexico before euopean settlers arrived?";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "world for 800"){
                echo "When were the pyramids of giza built";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "world for 1200"){
                echo "Who invented gunpowder";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "world for 1600"){
                echo "First monarch of england";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "world for 2000"){
                echo "Date of the fall of constanianople";
            } else if($_POST["category"] . " for " . $_POST["bet"] == "culture for 400"){
                echo "Who won the first american idol";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "culture for 800"){
                echo "What tv show on comedy central has been sued the most times";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "culture for 1200"){
                echo "Number one viewed television series in 1967";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "culture for 1600"){
                echo "Most viewed youtube video of all time";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "culture for 2000"){
                echo "Top suscribed youtuber";
            } else if($_POST["category"] . " for " . $_POST["bet"] == "movies for 400"){
                echo "Real name of darth vadar";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "movies for 800"){
                echo "Name of the tower of saruon";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "movies for 1200"){
                echo "what city is the movie the dark night set in";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "movies for 1600"){
                echo "Year of first non black and white movie";
            }else if($_POST["category"] . " for " . $_POST["bet"] == "movies for 2000"){
                echo "Director with most ocsars";
            }
            $_SESSION["answered"] =1;
            echo '<br><a href="jeapordy.php">Back to the game</a>';
            $_SESSION["lastScore"] = $_POST["bet"];
            $_SESSION["lastCategory"] = $_POST["category"];
        ?>
    </div>
    <form action="jeopardy.php" method = "POST">
        <input type="text" name="value" id="userguess">
        <input type="submit" value="Submit answer">
    </form>

</body>
</html>
