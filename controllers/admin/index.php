<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

$news = $db->query('SELECT * FROM news order by id desc ')->get();

view("admin/index.view.php", [
    'news' => $news,
    'category'=>$category
   
]);