<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 12/6/17
 * Time: 9:18 PM
 */
require 'vendor/autoload.php';


// connect to mongodb
$client = new MongoDB\Client("mongodb://localhost:27017");
echo "Databased connected.<br/>";

$db = $client->volimongodb;
echo "Database voli mongodb selected<br/>";

#$collection = $db->createCollection("volicol");
echo "Voli collection created<br/>";

$document = array( 
  "title" => "MongoDB", 
  "description" => "database", 
  "likes" => 100,
  "url" => "http://www.tutorialspoint.com/mongodb/",
  "by", "tutorials point"
);

$insertOneResult = $db->volicol->insertOne($document);
echo "Document inserted successfully<br/>";