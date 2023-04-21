<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$username = $_POST['username'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('login/create.view.php', [
        'errors' => $errors
    ]);
}
$user = $db->query('select * from admin where username = :username AND password=:password', [
    'username' => $username,
    'password' => $password
])->find();

if ($user) {

    login([
        'username' => $username
    ]);

    header('location: /admin');
    exit();
}

return view('login/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);