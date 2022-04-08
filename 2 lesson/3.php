<?php

    // $f = fopen('db.txt', 'w');

    // for ($i=0; $i < 2000000; $i++) { 
    //     fwrite($f, mt_rand(1000000, 1000000));
    // }

    // fclose($f);

    // $a = file('db.txt');
    // echo memory_get_usage();

    $f = fopen('db.txt', 'r');
    $total = 0;
    $cnt = 0;

    while(!feof($f)) {
        $str = fgets($f);
        if($str !== '') {
            $total += $str;
            $cnt++;
        }
    }

    echo $total / $cnt; //inf

    fclose($f);

?>