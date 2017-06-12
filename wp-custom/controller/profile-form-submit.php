<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 12/6/17
 * Time: 9:18 PM
 */

$voliName  = $_POST['voli_name'];
$voliEmail = $_POST['voli_email'];

$q1Answers = $_POST['q1_a'];

foreach($q1Answers as $answer){
    echo $answer . '</br>';
}


echo $voliEmail;
echo var_export($q1Answer);