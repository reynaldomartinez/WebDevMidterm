<?php
require_once('../model/dbase.php');

$results = $db->query('SELECT * FROM MidtermProject;');
$words = $results->fetchALL();
$words = shuffle($words);




foreach ($words as $word);
$randomWord = $word['WORDS'];


session_start();
//$wordBeingUsed = '';
if(!isset($_SESSION['wordBeingUsed'])){

    $_SESSION['wordBeingUsed'] = $randomWord;
    //echo $currentRandomWord;

}else{

    $wordBeingUsed = $_SESSION['wordBeingUsed'];
    //echo $wordBeingUsed;
}
$numberOfGuesses = 6;
for($i = 0; $i <= $numberOfGuesses; $i++ ){

}

if (isset($_SESSION['characterGuessed'])){

}

//session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../view/style.css" rel="stylesheet">
</head>
<body>

<h1 class="text-center inh1">Hangman</h1>

<div class="alert alert-primary" role="alert">
    <div class="text-center">
        <p>ANSWER: </p>

        <h3><?php echo $_SESSION['wordBeingUsed']; ?></h3>

        <p>Amount of Guesses: 6</p>
        <p>Guesses Remaining: </p>
        <p>Previous Guesses: </p>



        <?php
        if (isset($_GET['characterGuessed'])){
            $CurrentGuess = $_GET['characterGuessed'];
            echo "<p>Current Letter Guessed: " . $CurrentGuess . "</p>";

        }

        if (isset($_GET['OldLettersGuessed'])){
            $AllLettersGuessed = $_GET['OldLettersGuessed'] . $_GET['characterGuessed'];
            echo "<p>".$AllLettersGuessed."</p>";
        }
        ?>




    </div>
</div>

<form name="buttonForm" method="get" action="../view/testing.php" class="text-center letters">
    <!-- Hidden inputs -->
    <?php
    if (isset($_GET['OldLettersGuessed'])){
        echo "<input type='hidden' name='OldLettersGuessed' value='" . $AllLettersGuessed . "'>";
    } else {
        echo "<input type='hidden' name='OldLettersGuessed' value=''>";
    }



    echo "<input type='hidden' name='currentWord' value'" . $wordBeingUsed ."'>";
    echo "<input type='hidden' name='pastLettersUsed' value'" .$wordBeingUsed."'>";
    echo "<input type='hidden' name='pastLettersUsed' value'" . $wordBeingUsed ."'>";

    ?>

    <!--  -->
    <?php
    for ($i=1; $i <= 26 ; $i++) {
        $currentLetter = chr($i + 64);

        echo "<input type='submit' name='characterGuessed' value='" . $currentLetter . "'>";
    }
    ?>
</form>

</body>
</html>