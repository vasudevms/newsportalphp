<?php

$router->get('/', 'controllers/user/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/news', 'controllers/news/index.php');

$router->post('/add','controllers/news/create.php');
$router->post('/add/news','controllers/news/store.php');
$router->get('/edit','controllers/news/edit.php');
$router->post('/updatenews','controllers/news/update.php');
$router->get('/destroy','controllers/news/destroy.php');
$router->get('/newsshow','controllers/news/show.php');
$router->get('/viewpage','controllers/news/viewpage.php');

$router->get('/Sports','controllers/user/sports.php');
$router->get('/Movie','controllers/user/movie.php');
$router->get('/Politics','controllers/user/politics.php');
$router->get('/Others','controllers/user/others.php');

$router->get('/comment','controllers/comments/create.php');
$router->post('/comment','controllers/comments/store.php');
$router->post('/comments','controllers/comments/index.php');
$router->get('/showcomments','controllers/comments/show.php');
$router->get('/viewcomments','controllers/comments/store.php');

$router->post('/add','controllers/admin/create.php');
$router->get('/admin','controllers/admin/index.php');
$router->get('/commentverify','controllers/admin/comments.php');
$router->post('/commentverify','controllers/admin/comments.php');

$router->get('/verification','controllers/verify/verification.php');
$router->get('/verify','controllers/verify/verify.php');
$router->post('/verifyupdate','controllers/verify/verifyupdate.php');
$router->get('/verifyshow','controllers/verify/verifyshow.php');

$router->get('/login','controllers/login/create.php');
$router->post('/login','controllers/login/store.php');

$router->post('/session','controllers/login/destroy.php')->only('auth');




