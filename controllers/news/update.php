<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('select * from notes')->findOrFail();



$errors = [];

$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

$db->query('UPDATE news SET title = :title, authorname = :authorname, category = :category, content = :content WHERE news.id = 2', [
    'title' => $_POST['title'],
    'authorname' => $_POST['authorname'],
    'date' => $_POST['date'],
    'category' => $_POST['category'],
    'content' => $_POST['content'],
    'image' => $_POST['image']
]);


header('location: /admin');
die();