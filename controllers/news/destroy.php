<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$delete=$db->query('delete from news where id = :id', [
    'id' => $_GET['id']
]);

header('location: /admin');
die();
