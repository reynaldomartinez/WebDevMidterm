<?php

require_once('dbase.php');

try {
	$words = filter_input(INPUT_POST, 'words');
	if($words != false){

		$query = 'INSERT INTO MidtermProject(WORDS)
			  VALUES (:words)'; //:addID
		$statement = $db->prepare($query);
		$statement->bindValue(':words', $words);
		$statement->execute();
		$statement->closeCursor();
		}
	include('../view/success.php');

	} catch (PDOException $e) {
	include('../view/error.php');
}



include('../view/display_words.php');