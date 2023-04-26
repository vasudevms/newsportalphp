<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$comments = $db->query('SELECT * FROM `comments` ')->get();

view("comments/show.view.php", [
    'comments' => $comments
]);
