<?php

use Core\App;
use Core\Database;
$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

$db = App::resolve(Database::class);
$news = $db->query('select * from news')->find();

view("news/index.view.php", [
    'heading' => 'Newsportal',
    'news' => $news
]);