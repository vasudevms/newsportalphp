<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$news = $db->query('select * from news')->get();

view("news/show.view.php", [
    'heading' => 'News',
    'news' => $news
]);