<?php
require __DIR__.'/../vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Ruta al archivo de credenciales JSON

$factory = (new Factory)
     ->withServiceAccount(__DIR__.'/firebase_credentials.json')
     ->withDatabaseUri('https://lpp2-8c9a9-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
?>