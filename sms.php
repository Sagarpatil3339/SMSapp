<?php 
 
// this line loads the library 
 
// require('Twilio.php'); 

// use vendor\twilio\sdk\Twilio\Rest\Client; 
 
error_reporting(E_ALL); 
 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 
echo "Message Sending App"; 
 
 
 
$account_sid = 'ACdcc637002fa2ff12fa3dfeff171f4313' ; 
 
$auth_token = '83fa720d3c0bff7f8e76f84eead6d974'; 
 
$client = new Client($account_sid, $auth_token); 
 
 
 
 
 
 
 
 
 
$client->messages->create( 
 
'+1917 349 0168', 
 
array( 
 
// 'To' => "+1917 349 0168", 
 
'From' => "+12018175836", 
 
'Body' => "Hello from Prasad Patil CS643 Fall 2017" 
 
)); 
 
?> 
