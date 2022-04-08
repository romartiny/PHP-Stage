<?php

    $files = scandir('images');
    $images = array_filter($files, function($f) {
        return is_file("images/$f") && preg_match('/.*\.jpg$/', $f);
    });

    // foreach ($files as $f) {
    //     if(is_file("images/$f") && preg_match('/.*\.jpg$/', $f)) {
    //         $images[] = $f;
    //     }
    // }
//d8a9e13b-02df-4857-8de6-e58c6bede77b

    print_r($files);
    print_r($images);

?>

<div class="gallary">
    <? foreach ($images as $img): ?>
        <img src="images/<?=$img?>" alt="" width='100'>
        <? endforeach; ?>
</div>