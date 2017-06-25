<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 12/6/17
 * Time: 9:18 PM
 */

/*
$voliName  = $_POST['voli_name'];
$voliEmail = $_POST['voli_email'];

$q1Answers = $_POST['q1_a'];

foreach($q1Answers as $answer){
    echo $answer . '</br>';
}


echo $voliEmail;
echo var_export($q1Answer);
*/

require '../../vendor/autoload.php';


$document = array(
	"voli_name" => $_POST["voli_name"],
	"voli_email" => $_POST["voli_email"],
	"voli_volunteer_reason" => $_POST["q1_a"],
	"voli_skill_to_share" => $_POST["q2_a"],
	"voli_self_description" => $_POST["q3_text"],
	"voli_any_comment" => $_POST["q4_text"]
);


// connect to mongodb
$client = new MongoDB\Client("mongodb://localhost:27017");
echo "Databased connected.<br/>";

$db = $client->volimongodb;
echo "Database voli mongodb selected<br/>";

#$collection = $db->createCollection("volicol");
#echo "Voli collection created<br/>";
/*
$document = array( 
  "title" => "MongoDB", 
  "description" => "database", 
  "likes" => 100,
  "url" => "http://www.tutorialspoint.com/mongodb/",
  "by", "tutorials point"
);
*/

$insertOneResult = $db->volicol->insertOne($document);
echo "Document inserted successfully<br/>";

/*
if(is_ajax()){
    if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
        $action = $_POST['action'];
        echo $action;
    }

}

//Function to check if the request is an AJAX request
function is_ajax() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
*/

/*
$voliObj->voli_name = $_POST["voli_name"];
$voliObj->voli_email = $_POST["voli_email"];
$voliObj->voli_volunteer_reason = $_POST["q1_a"];
$voliObj->voli_skill_to_share = $_POST["q2_a"];
$voliObj->voli_self_description = $_POST["q3_text"];
$voliObj->voli_any_comment = $_POST["q4_text"];
$voliJson = json_encode($voliObj);
*/

