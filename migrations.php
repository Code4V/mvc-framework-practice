<?php 

require_once __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Core\Application;
use App\Controller\SiteController;
use App\Controller\AuthController;

$config =[
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS']
    ]
];


$app = new Application(__DIR__, $config);

$app->db->applyMigrations();