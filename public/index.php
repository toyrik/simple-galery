<?php
use App\App;

const APP_PATH = __DIR__ . '/..';

require_once __DIR__.'/../vendor/autoload.php';

$app = new App();

$app->run();

