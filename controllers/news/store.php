<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];
$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

// INSERT INTO `news` (`id`, `title`, `authorname`, `date`, `category`, `content`, `image`) VALUES (:id, :title, 'fghjgfgjgh', '2023-04-10', 'Movies', 'yjytjrftyhgfhdf', 
$news=$db->query('INSERT INTO news(title, authorname, date, category, content, image) VALUES (:title, :authorname, :date, :category, :content, :image)', [
    'title' => $_POST['title'],
    'authorname' => $_POST['authorname'],
    'date' => $_POST['date'],
    'category' => $_POST['category'],
    'content' => $_POST['content'],
    'image' => $image
]);

header('location: /admin');
die();