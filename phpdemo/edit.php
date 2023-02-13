<?php
require_once __DIR__ . '/vendor/autoload.php';

$config = ['host' => '127.0.0.1', 'port' => 9308];
$client = new \Manticoresearch\Client($config);
$index = $client->index('movies');

$index->updateDocument(['year'=>2019],4);
$index->updateDocument(['year'=>2019],['match'=>['*'=>'team']]);

$index->describe();
