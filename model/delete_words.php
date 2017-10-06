<?php

require_once('dbase.php');

$ID = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
if ($ID != false){

	$query = 'DELETE FROM MidtermProject
		   WHERE ID = :ID';
	$statement = $db->prepare($query);
	$statement->bindValue(':ID', $ID);
	$statement->execute();
	$statement->closeCursor();
}


include('../view/display_words.php');
?>