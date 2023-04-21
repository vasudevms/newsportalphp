<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$no=0;
$news_id=$_GET['id'];




$update = $db->query("UPDATE comments SET name = :name, email = :email, comments = :comments, news_id = :news_id, verify = :verify  WHERE id = :id", [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'comments' => $_POST['comments'],
    'news_id' => $_POST['news_id'],
    'verify' => $_POST['verify'],
]);
$comments=$db->query('select * from comments where id=:id',[
    'id' => $_POST['id']
])->get();

view("admin/commentverify.view.php", [
    'heading' => 'Comments',
    'comments' => $comments,
     'id'=>$news_id
   
]);
