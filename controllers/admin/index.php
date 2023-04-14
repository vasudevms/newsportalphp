<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


// Check if an image was uploaded
if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
    // Move the uploaded image to a permanent location
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);
    $imagePath = '/' . $uploadFile;
} else {
    $imagePath = null;
}

// Fetch all news from the database
$news = $db->query('SELECT * FROM `news`')->get();

view("admin/index.view.php", [
    'heading' => 'Newsportal',
    'news' => $news,
   
]);