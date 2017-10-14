<?php

$results = $db->query('SELECT * FROM MidtermProject ORDER BY RAND() LIMIT 1');
$words = $results->fetchALL();



foreach ($words as $word);
$randomWord = $word['WORDS'];

session_start();
$wordBeingUsed = '';
if(!isset($_SESSION['wordBeingUsed'])){

    $_SESSION['wordBeingUsed'] = $randomWord;

}else{

    $wordBeingUsed = $_SESSION['wordBeingUsed'];
}
//session_destroy();

