<?php

require_once __DIR__ . "/vendor/autoload.php";

$errorHandler = new Whoops\Run;
$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler);
$errorHandler->register();

$array_data = require __DIR__ . "/config/array.php";
echo '<strong>Returned "Test" key of included PHP array:</strong><br>';
echo $array_data['Test'];
echo '<br><br>';

use Carbon\Carbon;
$today = Carbon::now()->toDayDateTimeString();
echo '<strong>Returned today date using nesbot/carbon Composer package:</strong><br>';
echo $today;
echo '<br><br>';

echo '<strong>Executed "Lib" class from library/Lib.php using Composer classmap generation support:</strong><br>';
new Lib;
echo '<br><br>';

echo '<strong>Executed "Move" class from classes/Move.php using Composer classmap generation support:</strong><br>';
new Move;
echo '<br><br>';

echo '<strong>Executed "connect" function from config/database.php using Composer files autoload rules:</strong><br>';
connect();
echo '<br><br>';

echo '<strong>Executed "Book" class from src/Book.php using Composer psr-4 autoloader with "App" namespace prefix:</strong><br>';
use App\Book;
new Book();
echo '<br><br>';

echo '<strong>Executed "TextBook" class from src/TextBook.php using Composer psr-4 autoloader with "App" namespace prefix:</strong><br>';
new App\TextBook();
echo '<br><br>';

echo '<strong>Executed "Model" class from src/model/Model.php using Composer psr-4 autoloader with namespace "AppModels" prefix:</strong><br>';
new AppModels\Model();
