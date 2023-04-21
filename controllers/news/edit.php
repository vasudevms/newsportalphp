<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$news = $db->query('select * from news where id= :id',[
    'id' => $_GET['id']
    ])->get();

view("news/edit.view.php", [
    'heading' => 'Edit News',
    'errors' => [],
    'news' => $news
]);