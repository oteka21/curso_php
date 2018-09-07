<?php

$job = new Job();

if (!empty($_POST)){
$job->title = $_POST['title'];
$job->description = $_POST['description'];
$job->months = 13;
$job->visible = true;
$job->save();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
	<title>Add Job</title>
</head>
<body>
	<h1>add Job</h1>
	<form action="addJob.php" method="post">
		<label for="">Title:</label>
		<input type="text" name="title"><br>
		<label for="">Description:</label>
		<input type="text" name="description"><br>
		<!-- <input type="submit" name="" value="Guardar"> -->
		<button type="sibmit">Guardar</button>
	</form>
</body>
</html>