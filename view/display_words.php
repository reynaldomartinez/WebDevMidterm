<?php 
require('../model/dbase.php');
require('../model/word_db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hangman Midterm Project</title>
<!-- Css File-->
	<link rel="stylesheet" href="../view/style.css">
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/d696ac697e.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nosifer" rel="stylesheet">
</head>
	<body>
		<div id="dbwords">
			<p>Words In Database:</p>
		</div>

<!-- Table Start -->
<table class="table table-striped">
  <thead>
    <tr>
      <th>Word:</th>
      <th>Edit:</th>
      <th>Delete:</th>
    </tr>
  </thead>
  <tbody><?php foreach ($words as $word): ?>
            <tr scope="row">
<!-- Displaying list of words in database-->
                <td>
            <?php echo $word['WORDS']; ?>
                </td>

<!-- Edit Words-->
<!-- FIXXXX THHHHHHEEE EDDDDIIITTTT FUNCCCTTTIOOOONAAALLLLITTTTYYY-->
			<td >
<!-- Using form and deleting words if matched DB ID-->
    			<form action="../model/edit_words.php" method="post">
<!-- Delete Button-->
			        <input type="hidden" name="ID" value="<?php echo $word['ID']; ?>">
			        <input class="" type="submit" value="Edit">
			    </form>
			</td> 
                <td >
<!-- Using form and deleting words if matched DB ID-->
                    <form action="../model/delete_words.php" method="post">
<!-- Delete Button-->
                        <input type="hidden" name="ID" value="<?php echo $word['ID']; ?>">
                        <input class="" type="submit" value="Delete">
                    </form>
                </td> 
            </tr>
            <?php endforeach; ?>
  </tbody>
</table>

  <div id="add_words" class="text-center">
  	<form action="../model/add_words.php" method="post">
        <input id="inputbg" type="text" name="words" value="jh" maxlength="20"> 
        <input type="submit" value="Add Word">
  	</form>
  </div>

	</body>
</html>