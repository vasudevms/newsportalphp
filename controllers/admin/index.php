<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

$news = $db->query('SELECT * FROM `news`',[
    'title' => $_POST['title'],
    'authorname' => $_POST['authorname'],
    'date' => $_POST['date'],
    'category' => $_POST['category'],
    'content' => $_POST['content'],
    'image' => $imageData
])->get();

view("admin/index.view.php", [
    'heading' => 'Newsportal',
    'news' => $news,
    'category'=>$category
   
]);