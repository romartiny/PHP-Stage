<?php

	include_once('functions.php');		

	/*
		your code here
		get id from url
		check id
		call removeArticle
	*/

	// var_dump($id);

	$id = $_GET['id'];
	removeArticle($id);

?>

<hr>
<a href="index.php">Move to main page</a>