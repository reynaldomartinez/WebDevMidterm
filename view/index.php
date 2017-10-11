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
				<p id="answer">ANSWER: 
					<?php foreach ($words as $word): ?>
					<?php endforeach ?>
					<p><?php echo $word['WORDS']; ?></p>
				</p>
				<p>Guesses Allowed: 6</p>
				<p>Guesses Remaining: </p>

				<?php
//Displaying current letter picked
					if (isset($_GET['characterGuessed'])){
						$CurrentGuess = $_GET['characterGuessed'];
						echo "<p>Current Letter Guessed: " . $CurrentGuess . "</p>";		
					}

// //Displaying list of letters picked
// 					if (isset($_GET['pastLettersUsed'])) {
// 						$x = $_GET['characterGuessed'] . $_GET['pastLettersUsed'];
// 						echo "Letters Used: " . $x;
// 					}



				?>

			</div>
		</div>

<!-- HIDDEN FIELD-->

		<form name="buttonForm" method="get" action="../view/index.php" class="text-center letters">
			<?php
				echo "<input type='hidden' name='pastLettersUsed' value'" . $x ."'>";

			?>
<!-- PRINT ALPHABET -->
			<?php
				for ($i=1; $i <= 26 ; $i++) { 
					echo "<input type='submit' name='characterGuessed' value='" . chr($i + 64) . "'>";
				}
			?>
		</form>
</body>
</html>