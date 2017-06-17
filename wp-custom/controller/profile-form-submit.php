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