<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$no=0;
$news_id=$_GET['id'];

$comments=$db->query('select * from comments where news_id=:id',[
    'id' => $_GET['id']
])->get();

view("admin/commentverify.view.php", [
    'comments' => $comments,
   
]);
