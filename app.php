<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\Example;

$test = new Example();
echo $test->sayHello();