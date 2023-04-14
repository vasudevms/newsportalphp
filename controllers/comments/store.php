<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];
$news_id=1;



$db->query('INSERT INTO `comments`(`name`, `email`, `comments`, `news_id`, `verify`) VALUES (:name, :email, :comments, :news_id, :verify)', [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'comments' => $_POST['comments'],
    'news_id'=>$news_id,
    'verify' => $_POST['verify']
    
]);

header('location: /admin');
die();