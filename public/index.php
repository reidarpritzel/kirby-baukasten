<?php

use Kirby\Cms\App;

$base = dirname(__DIR__);

require $base . '/kirby/bootstrap.php';
require $base . '/vendor/autoload.php';

$kirby = new App([
  'roots' => [
    'index'    => __DIR__,
    'base'     => $base,
    'site'     => $base . '/site',
    'storage'  => $storage = $base . '/storage',
    'content'  => $storage . '/content',
    'accounts' => $storage . '/accounts',
    'cache'    => $storage . '/cache',
    'logs'     => $storage . '/logs',
    'sessions' => $storage . '/sessions',
  ]
]);

echo $kirby->render();
