<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = ['host' => '127.0.0.1', 'port' => 9308];
$client = new \Manticoresearch\Client($config);
$index = $client->index('movies');

$index->create([
    'title' => ['type' => 'text'],
    'plot' => ['type' => 'text'],
    'year' => ['type' => 'integer'],
    'rating' => ['type' => 'float']
], [ // 指定中文分词
    'charset_table' => 'cjk',
    'morphology' => 'icu_chinese',
    //'stopwords' => 'zh',
    //'expand_keywords' => '1',
]);