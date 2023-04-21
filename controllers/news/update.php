<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

if (!Validator::string($_POST['title'], 3, 20)) {
    $errors['title'] = 'Please enter a Valid Title';
}
if (!Validator::string($_POST['authorname'], 3, 20)) {
    $errors['email'] = 'Please enter a valid Authorname';
}
if (!Validator::string($_POST['date'], 1, 100)) {
    $errors['name'] = 'Please enter valid Date';
}
if (!Validator::string($_POST['category'], 3, 100)) {
    $errors['name'] = 'Please enter valid Category';
}
if (!Validator::string($_POST['content'], 10, 1000)) {
    $errors['name'] = 'Please enter valid Content';
}
if ($_POST['image'] == null) {
    $errors['image'] = 'Please insert valid Image';
}

if (!empty($errors)) {
    return view('/news/edit.view.php', [
        'errors' => $errors
    ]);
}

$update = $db->query('UPDATE news SET title = :title, authorname = :authorname, date = :date, category = :category, content = :content, image = :image WHERE id=:id', [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'authorname' => $_POST['authorname'],
    'date' => $_POST['date'],
    'category' => $_POST['category'],
    'content' => $_POST['content'],
    'image' => $imageData
]);

header('location: /admin');
die();

