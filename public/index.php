<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Ethereal\Foundation\Application(
  dirname(__DIR__)
);

var_dump($app);