<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);



$comments = $db->query('select * from comments')->get();



view("notes/show.view.php", [
    'heading' => 'Comments',
    'comments' => $comments
]);