<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/util/database.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = preventXSS($_POST, true);

    $missing = checkMissingData($data, true);
    if(!empty($missing)){
        echo $twig->render('error.html.twig', ['missing' => $missing, 'login' => "true"]);
        return;
    }


    // Connect to the DB
    $mysqli = new mysqli('localhost', 'root', 'root', 'my_alex0');

    // Verify connection to the DB
    if ($mysqli->connect_error) {
        die('Connection failed: ' . $mysqli->connect_error);
    }
    
    $response = loginUser($data, $mysqli);
    if(!is_null($response))
        if($response === "User not Found")
            echo $twig->render('error.html.twig', ['notFound' => 'USER', 'login' => "true"]);
        else {
            $response = (array) $response;
            unset($response['password_hash']);
            unset($response['ID']);
            unset($response['created_at']);
            echo $twig->render('index.html.twig', ['data' => $response]);
        }
    else
        echo $twig->render('error.html.twig', ['wrongCredentials' => "Password", 'login' => "true"]);
        
    $mysqli->close();
    return;
}

echo $twig->render('login.html.twig');

?>
