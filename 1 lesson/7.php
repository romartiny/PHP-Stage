<?php
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
            $dt = date('Y-m-d H:i:s');
            $mainBody = '$dt\n$phone\n$name';
            mail('1@1.com', 'Hi', $mainBody);
            $isSend = true;
        }
    } else {
        $name = '';
        $phone = '';
    }

echo $_SERVER['REQUEST_METHOD'];
echo '<pre>';
print_r($_POST);
echo '</pre>';


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