<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comments = $db->query('select * from comments')->get();

view("verify/showverify.view.php", [
    'heading' => 'Comments',
    'comments' => $comments
]);