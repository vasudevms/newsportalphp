<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$no=0;

$news = $db->query('select * from news where id= :id',[
    'id' => $_GET['id']
])->get();

$news_id=$_GET['id'];


$comments=$db->query('select * from comments where news_id=:id AND verify = :verify',[
    'id' => $_GET['id'],
    'verify'=>'verify'
])->get();

view("news/viewpage.view.php", [
    'heading' => 'Home',
    'news'=>$news,
    'comments'=>$comments,
    'news_id'=>$news_id
]);