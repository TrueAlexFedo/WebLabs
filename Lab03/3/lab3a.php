<?php

function redirectToHomePage(): void
{
    header('Location: index.php');
    exit();
}

if (!isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHomePage();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$filePath = "categories/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, $description)) {
    throw new Exception('Error!');
}

chmod($filePath, 0777);

redirectToHomePage();
?>