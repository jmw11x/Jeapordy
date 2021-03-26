<?php
    session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeapordy</title>
    <link rel = "stylesheet" href ="style.css" type = "text/css">
</head>
<body class="body2">

    <div class = "mainboard">
        <table>
            <tr>
                <th>CS history</th>
                <th>Sports</th>
                <th>World History</th>
                <th>Popular Culture</th>
                <th>Movies</th>
            </tr>
            <tr>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
                <td>$400</td>
            </tr>
            <tr>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
                <td>$800</td>
                <td>$2000</td>
            </tr>
            <tr>
                <td>$1200</td>
                <td>$1200</td>
                <td>$1200</td>
                <td>$1200</td>
                <td>$1200</td>
            </tr>
            <tr>
                <td>$1600</td>
                <td>$1600</td>
                <td>$1600</td>
                <td>$1600</td>
                <td>$1600</td>
            </tr>
            <tr>
                <td>$2000</td>
                <td>$2000</td>
                <td>$2000</td>
                <td>$2000</td>
                <td>$2000</td>
            </tr>

        </table>
    </div>
    <div class = "input">
        <h1>Choose Category and the Price</h1>
        <form action = "question.php" method = "POST">
        <select name="category" id="cat">
                <option value="CS">CS history</option>
                <option value="sports">sports</option>
                <option value="world">world history</option>
                <option value="culture">Popular culture</option>
                <option value="movies">Movies</option>
            </select>

            <select name="bet" id="bet">
                <option value="400">400</option>
                <option value="800">800</option>
                <option value="1200">1200</option>
                <option value="1600">1600</option>
                <option value="2000">2000</option>
            </select>
            <input type="submit" name = "submitGuess" value ="Next category">
        </form>
    </div>
    <div class = "score">
        <?php
            if($_SESSION["answered"] ==1){
                if(strcmp($_POST["value"], "Alan Turing") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                } else if(strcmp($_POST["value"], "tabs") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Windows") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Interface Manager") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Pong") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "James Naysmith") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Tom Brady") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Michigan") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Harvard Yale boat race") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Brazil") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Aztec") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "2550 BC") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Wei Boyang") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "James VI") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "May 29 1453") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Kelly Clarkson") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "South Park") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "The Andy Griffith Show") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Baby Shark Dance") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "T-Series") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Aniken Skywalker") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "barad-dur") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Gotham") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "The Wizard of oz") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else if(strcmp($_POST["value"], "Stephen Speilberg") ==0){
                    $_SESSION["score"] += $_SESSION["lastScore"];
                    echo "Your score is: " . $_SESSION["score"] . "\n";
                }else{
                    echo "SCORE: " . $_SESSION["score"] ."\n";
                }
            }else{
                echo "SCORE: " . $_SESSION["score"] ."\n";
            }
            if(strcmp($_SESSION["lastScore"],"400") ==0 && strcmp($_SESSION["lastCategory"], "CS") ==0){
                $_SESSION["visitedArray"][0][0] = 1;
            }else if(strcmp($_SESSION["lastScore"],"800") ==0 && strcmp($_SESSION["lastCategory"], "CS") ==0){
                $_SESSION["visitedArray"][0][1] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1200") ==0 && strcmp($_SESSION["lastCategory"], "CS") ==0){
                $_SESSION["visitedArray"][0][2] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1600") ==0 && strcmp($_SESSION["lastCategory"], "CS") ==0){
                $_SESSION["visitedArray"][0][3] = 1;
            }else if(strcmp($_SESSION["lastScore"],"2000") ==0 && strcmp($_SESSION["lastCategory"], "CS") ==0){
                $_SESSION["visitedArray"][0][4] = 1;
            }else if(strcmp($_SESSION["lastScore"],"400") ==0 && strcmp($_SESSION["lastCategory"], "sports") ==0){
                $_SESSION["visitedArray"][1][0] = 1;
            }else if(strcmp($_SESSION["lastScore"],"800") ==0 && strcmp($_SESSION["lastCategory"], "sports") ==0){
                $_SESSION["visitedArray"][1][1] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1200") ==0 && strcmp($_SESSION["lastCategory"], "sports") ==0){
                $_SESSION["visitedArray"][1][2] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1600") ==0 && strcmp($_SESSION["lastCategory"], "sports") ==0){
                $_SESSION["visitedArray"][1][3] = 1;
            }else if(strcmp($_SESSION["lastScore"],"2000") ==0 && strcmp($_SESSION["lastCategory"], "sports") ==0){
                $_SESSION["visitedArray"][1][4] = 1;
            }else if(strcmp($_SESSION["lastScore"],"400") ==0 && strcmp($_SESSION["lastCategory"], "world") ==0){
                $_SESSION["visitedArray"][2][0] = 1;
            }else if(strcmp($_SESSION["lastScore"],"800") ==0 && strcmp($_SESSION["lastCategory"], "world") ==0){
                $_SESSION["visitedArray"][2][1] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1200") ==0 && strcmp($_SESSION["lastCategory"], "world") ==0){
                $_SESSION["visitedArray"][2][2] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1600") ==0 && strcmp($_SESSION["lastCategory"], "world") ==0){
                $_SESSION["visitedArray"][2][3] = 1;
            }else if(strcmp($_SESSION["lastScore"],"2000") ==0 && strcmp($_SESSION["lastCategory"], "world") ==0){
                $_SESSION["visitedArray"][2][4] = 1;
            }else if(strcmp($_SESSION["lastScore"],"400") ==0 && strcmp($_SESSION["lastCategory"], "culture") ==0){
                $_SESSION["visitedArray"][3][0] = 1;
            }else if(strcmp($_SESSION["lastScore"],"800") ==0 && strcmp($_SESSION["lastCategory"], "culture") ==0){
                $_SESSION["visitedArray"][3][1] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1200") ==0 && strcmp($_SESSION["lastCategory"], "culture") ==0){
                $_SESSION["visitedArray"][3][2] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1600") ==0 && strcmp($_SESSION["lastCategory"], "culture") ==0){
                $_SESSION["visitedArray"][3][3] = 1;
            }else if(strcmp($_SESSION["lastScore"],"2000") ==0 && strcmp($_SESSION["lastCategory"], "culture") ==0){
                $_SESSION["visitedArray"][3][4] = 1;
            }else if(strcmp($_SESSION["lastScore"],"400") ==0 && strcmp($_SESSION["lastCategory"], "movies") ==0){
                $_SESSION["visitedArray"][4][0] = 1;
            }else if(strcmp($_SESSION["lastScore"],"800") ==0 && strcmp($_SESSION["lastCategory"], "movies") ==0){
                $_SESSION["visitedArray"][4][1] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1200") ==0 && strcmp($_SESSION["lastCategory"], "movies") ==0){
                $_SESSION["visitedArray"][4][2] = 1;
            }else if(strcmp($_SESSION["lastScore"],"1600") ==0 && strcmp($_SESSION["lastCategory"], "movies") ==0){
                $_SESSION["visitedArray"][4][3] = 1;
            }else if(strcmp($_SESSION["lastScore"],"2000") ==0 && strcmp($_SESSION["lastCategory"], "movies") ==0){
                $_SESSION["visitedArray"][4][4] = 1;
            }
            // j is tr, i is
            for($i = 0; $i<5; $i++){
                for($j=0;$j<5;$j++){
                    $row = $j+2;
                    $col = $i+1;
                    if($_SESSION["visitedArray"][$i][$j] == 1){
                        echo "
                    <style>
                        table tr:nth-child($row) td:nth-child($col) { 
                            color: blue;
                        }
                    </style>
                    ";
                    } 
                }
            }
            if($_SESSION["guesses"] == 24){
               echo  '<a href="">Game over click this link to play again</a>';
               session_destroy();
            }
        ?>
    </div>
</body>
</html>