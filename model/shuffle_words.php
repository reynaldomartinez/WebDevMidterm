<?php

	$query = 'SELECT * FROM MidtermProject
				ORDER BY ID
				LIMIT 0,15';
	$statement = $db->prepare($query);
	$statement->execute();

	$words = $statement->fetchAll();
	
	$statement->closeCursor();


	shuffle($words);