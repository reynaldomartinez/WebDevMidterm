<?php

	$query = 'SELECT * FROM MidtermProject
				LIMIT 0,15';

	$statement = $db->prepare($query);
	$statement->execute();

	$words = $statement->fetchAll();
	
	$statement->closeCursor();

