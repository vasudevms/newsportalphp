<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$news = $db->query('SELECT * FROM news WHERE category = :category' , [
    'category' => 'Others',
    
])->get();

view("index.view.php", [
    'heading' => 'Home',
    'news'=>$news,
    'category'=>$category
]);