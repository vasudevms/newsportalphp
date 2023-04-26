<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$no=0;

$comments = $db->query('select * from comments')->get();

view("comments/show.view.php", [
    'comments' => $comments
]);