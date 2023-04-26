<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];
$image = $_FILES['image']['tmp_name'];
$imageData = file_get_contents($image);

if ( !Validator::string($_POST['title'],3,20)) {
    $errors['title'] = 'Please enter a Valid Title';
}
if ( !Validator::string($_POST['authorname'],3,20)) {
    $errors['email'] = 'Please enter a valid Authorname';
}
if ( !Validator::string($_POST['date'],1,100)) {
    $errors['date'] = 'Please enter valid Date';
}
if ( !Validator::string($_POST['category'],3,100)) {
    $errors['category'] = 'Please enter valid Category';
}
if ( !Validator::string($_POST['content'],10,1000)) {
    $errors['content'] = 'Please enter valid Content';
}
if(empty($imageData)){
    $errors['image'] = 'Please insert valid Image';
}
if (! empty($errors)) {
    return view('/news/create.view.php', [
        'errors' => $errors
    ]);
}
$news = $db->query('select * from news where id= :id',[
    'id' => $_POST['news_id']
])->get();

$news=$db->query('INSERT INTO news(title, authorname, date, category, content, image) VALUES (:title, :authorname, :date, :category, :content, :image)', [
    
    'title' => $_POST['title'],
    'authorname' => $_POST['authorname'],
    'date' => $_POST['date'],
    'category' => $_POST['category'],
    'content' => $_POST['content'],
    'image' => $imageData
]);

header('location: /admin');
die();

