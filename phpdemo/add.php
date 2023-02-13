<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = ['host' => '127.0.0.1', 'port' => 9308];
$client = new \Manticoresearch\Client($config);
$index = $client->index('movies');

$index->addDocument([
    'title' => 'Star Trek: 中文',
    'plot' => 'The 中文 is diverted to the Romulan homeworld Romulus, supposedly because they want to negotiate a peace treaty. Captain Picard and his crew discover a serious threat to the Federation once Praetor Shinzon plans to attack Earth.',
    'year' => 2002,
    'rating' => 6.4
    ],
1);


// $index->addDocuments([
//     ['id'=>2,'title'=>'Interstellar','plot'=>'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.','year'=>2014,'rating'=>8.5],
//     ['id'=>3,'title'=>'Inception 中文','plot'=>'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.','year'=>2010,'rating'=>8.8],
//     ['id'=>4,'title'=>'1917 ','plot'=>' As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.','year'=>2018,'rating'=>8.4],
//     ['id'=>5,'title'=>'Alien','plot'=>' After a space merchant vessel receives an unknown transmission as a distress call, one of the team\'s member is attacked by a mysterious life form and they soon realize that its life cycle has merely begun.','year'=>1979,'rating'=>8.4]
// ]); 

$index->addDocuments([
    ['id'=>6,'title'=>'Interstellar 又双叒叕','plot'=>'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.','year'=>2014,'rating'=>8.5],
    ['id'=>7,'title'=>'Inception 中文','plot'=>'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.','year'=>2010,'rating'=>8.8],
    ['id'=>8,'title'=>'1917 ','plot'=>' As a regiment assembles to wage war deep in enemy territory, two soldiers are assigned to race against time and deliver a message that will stop 1,600 men from walking straight into a deadly trap.','year'=>2018,'rating'=>8.4],
    ['id'=>9,'title'=>'Alien','plot'=>' After a space merchant vessel receives an unknown transmission as a distress call, one of the team\'s member is attacked by a mysterious life form and they soon realize that its life cycle has merely begun.','year'=>1979,'rating'=>8.4]
]); 