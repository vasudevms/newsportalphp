<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$comments = $db->query('SELECT * FROM `comments`',[
    'id'=>['id'],
    'name'=> $_POST['name'],
    'email' => $_POST['email'],
    'comments' => $_POST['comments'],
    'news_id' => $_POST['news_id'],
    'verify' => $_POST['verify'],
])->find();



view("comments/show.view.php", [
    'heading' => 'Comments',
    'comments' => $comments
]);