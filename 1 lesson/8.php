<?php
    $response = [
        'res' => false,
        'error' => ''
    ];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);

        if($name === '' || $phone === ''){
            $response['error'] = 'No data';
        } else if(mb_strlen($name, 'UTF8') < 2) {
            $response['error'] = 'Invalid! Need more then 2 symbols';
        } 
        else {
            $dt = date('Y-m-d H:i:s');
            $mainBody = '$dt\n$phone\n$name';
            mail('1@1.com', 'Hi', $mainBody);
            $response['res'] = true;
        }
    }

    echo json_encode($response);


?>