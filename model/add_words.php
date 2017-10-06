<?php

require_once('dbase.php');
$words = filter_input(INPUT_POST, 'words');

if($words != false){

	$query = 'INSERT INTO MidtermProject(WORDS)
		  VALUES (:words)'; //:addID
	$statement = $db->prepare($query);
	$statement->bindValue(':words', $words);
	$statement->execute();
	$statement->closeCursor();


include('../view/display_words.php');
}

//WRITE CONDITION SO THERE WILL BE NO DUPLICATES