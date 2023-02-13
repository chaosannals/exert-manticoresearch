<?php


require_once __DIR__ . '/vendor/autoload.php';

$config = ['host' => '127.0.0.1', 'port' => 9308];
$client = new \Manticoresearch\Client($config);
$index = $client->index('movies');

// $results = $index->search('space team')->get();
$results = $index->search('叒叕')->get();

foreach($results as $doc) {
   echo 'Document:'.$doc->getId()."\n";
   foreach($doc->getData() as $field=>$value)
   {   
        echo $field.": ".$value."\n";
   }
}
