<?php
include '../model/dbase.php';
include '../model/shuffle_words.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hangman Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1 class="text-center inh1">Hangman</h1>
<div class="alert alert-primary" role="alert">
    <div class="text-center">
        <a href="display_words.php" class="btn btn-primary homelink" role="button">Words in Database...</a>
        <p id="answer">ANSWER:<p>
        <p><?php echo $_SESSION['wordBeingUsed']; ?></p>
        <p>Guesses Allowed: 6</p>
        <p>Guesses Remaining: </p>
        <!-- Displaying current letter picked -->
        <?php

        if (isset($_GET['characterGuessed'])){
            $CurrentGuess = $_GET['characterGuessed'];
            echo "<p>Current Letter Guessed: " . $CurrentGuess . "</p>";

        }


        if (isset($_GET['OldLettersGuessed'])){
            $AllLettersGuessed = $_GET['OldLettersGuessed'] . $_GET['characterGuessed'];
            echo "<p>Previous Guesses: ".$AllLettersGuessed."</p>";
        }





        ?>
    </div>
</div>

<!-- HIDDEN FIELD-->

<form name="buttonForm" method="get" action="../view/testing.php" class="text-center letters">
    <?php
    if (isset($_GET['OldLettersGuessed'])){
        echo "<input type='hidden' name='OldLettersGuessed' value='" . $AllLettersGuessed . "'>";
    } else {
        echo "<input type='hidden' name='OldLettersGuessed' value=''>";
    }

    for ($i=1; $i <= 26 ; $i++) {
        $currentLetter = chr($i + 64);
        echo "<input type='submit' name='characterGuessed' value='" . $currentLetter . "'>";
    }

    ?>
</form>
</body>
</html>