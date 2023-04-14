<?php


$router->get('/', 'controllers/user/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');


$router->get('/news', 'controllers/news/index.php');

$router->post('/add','controllers/news/create.php');
$router->post('/add/news','controllers/news/store.php');
$router->get('/edit','controllers/news/edit.php');
$router->post('/update','controllers/news/update.php');

$router->post('/add','controllers/admin/create.php');

// $router->get('/note/edit', 'controllers/notes/edit.php');
// $router->patch('/note', 'controllers/notes/update.php');

// $router->get('/notes/create', 'controllers/notes/create.php');
// $router->post('/notes', 'controllers/notes/store.php');


$router->get('/comment','controllers/comments/create.php');
$router->post('/comment','controllers/comments/store.php');
$router->post('/comments','controllers/comments/index.php');

// $router->get('/add','controllers/news/index.php');

$router->get('/viewcomments','controllers/comments/store.php');

$router->get('/login','controllers/login/create.php');
$router->post('/login','controllers/login/store.php');


$router->get('/admin','controllers/admin/index.php');

$router->delete('/session','controllers/login/destroy.php')->only('auth');

$router->delete('/notes', 'controllers/notes/destroy.php');

$router->get('/invoice', 'controllers/invoice/create.php');



