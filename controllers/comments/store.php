<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];
$news_id=$_POST['news_id'];

if ( !Validator::string($_POST['name'],5,20)) {
    $errors['name'] = 'Please enter a valid Name';
}

if ( !Validator::string($_POST['email'],5,20)) {
    $errors['email'] = 'Please enter a valid Email';
}
if ( !Validator::string($_POST['comments'],5,100)) {
    $errors['name'] = 'Please enter valid Comments';
}
if (! empty($errors)) {
    return view('/comments/create.view.php', [
        'errors' => $errors
    ]);
}
$news = $db->query('select * from news where id= :id',[
    'id' => $_POST['news_id']
])->get();

$comments=$db->query('select * from comments where news_id=:id AND verify = :verify',[
    'id' => $_POST['news_id'],
    'verify'=>'verify'
])->get();

$db->query('INSERT INTO `comments`(`name`, `email`, `comments`, `news_id`, `verify`) VALUES (:name, :email, :comments, :news_id, :verify)', [
    
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'comments' => $_POST['comments'],
    'news_id'=>$news_id,
    'verify' => $_POST['verify']
    
]);

view("news/viewpage.view.php", [
    'news'=>$news,
    'comments'=>$comments,
    'news_id'=>$news_id
]);
