<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$comments = $db->query('select * from comments where id = :id', [
    'id' => $_GET['id']
])->get();

view('verify/verifyedit.view.php', [
    'comments' => $comments,
]);