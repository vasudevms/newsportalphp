<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$cotegories = $db->query('SELECT * FROM `news` where category=:category',[
    'category'=>$category
  
])->find();



view("comments/show.view.php", [
    'heading' => 'Categories',
    'categories' => $categories
]);