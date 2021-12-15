<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/util/database.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = preventXSS($_POST);

    $missing = checkMissingData($data);
    if(!empty($missing)){
        echo $twig->render('error.html.twig', ['missing' => $missing]);
        return;
    }
    // Connect to the DB
    $mysqli = new mysqli('localhost', 'root', 'root', 'my_alex0');

    // Verify connection to the DB
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }

    $duplicate = checkDuplicateUser($data, $mysqli);
    if(!empty($duplicate)){
        echo $twig->render('error.html.twig', ['duplicate' => $duplicate]);
        return;
    }
    
    insertUser($data, $mysqli);

    echo $twig->render('error.html.twig', ['success' => "true"]);
    $mysqli->close();
    return;
}

echo $twig->render('registration.html.twig');

?>