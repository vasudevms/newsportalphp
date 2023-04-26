<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$news = $db->query('SELECT * FROM `news` order by id DESC')->get();

$category=$db->query('SELECT distinct category FROM news')->get();

view("index.view.php", [
    'news'=>$news,
    'category'=>$category
]);