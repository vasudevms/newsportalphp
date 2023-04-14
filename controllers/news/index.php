<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$news = $db->query('select * from news')->find();

view("news/index.view.php", [
    'heading' => 'Newsportal',
    'news' => $news
]);