<?php
	include '../model/dbase.php';
	include '../controller/word_match.php';
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
			</div>
		</div>
</body>
</html>