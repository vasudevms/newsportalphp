<?php

$news_id=$_GET['id'];

view('comments/create.view.php',[
    'news_id'=>$news_id
]);
