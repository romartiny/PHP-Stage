<?php
    include_once('functions.php');
    $articles = getArticles();

?>
<div class="articles">
    <? foreach($articles as $id => $article): ?>
        <div class="article">
            <h2><?=$article['id'] ?></h2>
            <a href='article.php?id=<?=$id?>'>Read more</a>
        </div>
    <? endforeach; ?>
    
</div>