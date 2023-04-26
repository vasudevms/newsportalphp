<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$categories = $db->query('SELECT distinct category FROM `news` where category=:category',[
    'category'=>$category
  
])->find();

view("comments/show.view.php", [
    'categories' => $categories
]);