<?php

    include_once('model/apps.php');

    $isSend = false;
    $err = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);

        if($name === '' || $phone === ''){
            $err = 'No data';
        } else if(mb_strlen($name, 'UTF8') < 2) {
            $err = 'Name must be more then 2 symbols';
        } 
        else {
            addApp($name, $phone);
            getApps();
            $isSend = true;
        }
    } else {
        $name = '';
        $phone = '';
    }

?>
<div class="form">
    <? if($isSend): ?>
        <p>You send</p>
        <? else: ?>
    <form method="post">
        Name:<br>
        <input type='text' name='name' value='<?=$name?>'><br>
        Phone:<br>
        <input type='text' name='phone' value'<?=$phone?>''><br>
        <button>Send</button>
        <p><?=$err?></p>
    </form>
    <? endif; ?>
<div>