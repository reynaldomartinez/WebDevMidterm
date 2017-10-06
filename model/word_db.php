<?php

	$query = 'SELECT * FROM MidtermProject
				ORDER BY ID
				LIMIT 0,10';
	$statement = $db->prepare($query);
	$statement->execute();

	$words = $statement->fetchAll();
	
	$statement->closeCursor();