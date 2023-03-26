<?php 

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use App\Core\Application;
use App\Controller\SiteController;
use App\Controller\AuthController;

$config =[
    'userClass' => \App\Models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS']
    ]
];


$app = new Application(dirname(__DIR__), $config);

// HOME
$app->router->get('/', [SiteController::class, 'home']);

// TEST PAGE
$app->router->get('/test', [SiteController::class, 'test']);
$app->router->post('/test', [SiteController::class, 'test']);

// LOG IN
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

// REGISTRATION
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);


$app->router->get('/profile', [AuthController::class, 'profile']);

$app->router->get('/logout', [AuthController::class, 'logout']);




$app->run();