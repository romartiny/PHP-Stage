<?php

	include_once('functions.php');

	/*
		your code here
		check request method
		read POST-data
		validate data
		call addArticle
	*/

	$isSend = false;
	$err = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$title = trim($_POST['title']);
		$content = trim($_POST['content']);
		
		if($title === '' || $content === ''){
			$err = 'Заполните все поля!';
		}
		else if(mb_strlen($title, 'UTF8') < 2){
			$err = 'Имя не короче 2 символов!';
		}
		else{
			addArticle($title, $content);
			$isSend = true;
		}
	}
	else{
		$title = '';
		$content = '';
	}

?>
<div class="form">
	<? if($isSend): ?>
	<? else: ?>
		<form method="post">
			Name:<br>
			<input type="text" name="title"><br>
			<input type="text" name="content"><br>
			<button>Send</button>
			<p><?=$err?></p>
		</form>
	<? endif; ?>
</div>

<a href="index.php">Move to main page</a>