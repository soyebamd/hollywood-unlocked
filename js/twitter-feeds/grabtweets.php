<?php

//We use already made Twitter OAuth library
//https://github.com/mynetx/codebird-php
require_once ('codebird.php');

//Twitter OAuth Settings, enter your settings here:

$CONSUMER_KEY = 'pPqM1ZOtD5xJ6GMvrQggg';
$CONSUMER_SECRET = 'iwbRWo3GTBmRBOWlEXP4DwuyVPz5TRJGYvUtfAxY';
$ACCESS_TOKEN = '348025137-96lZwUfj0IFmZlrcSPxyAEmFjqzUPdBoCcSTLmPV';
$ACCESS_TOKEN_SECRET = 'uOswjjtzl5pswCkQaVi7QOUSpbRkdAbxQ8KqCy3d74';

//Get authenticated
Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
$cb = Codebird::getInstance();
$cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);


//retrieve posts
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

//https://dev.twitter.com/docs/api/1.1/get/statuses/user_timeline
//https://dev.twitter.com/docs/api/1.1/get/search/tweets
$params = array(
	'screen_name' => $q,
	'q' => $q,
	'count' => $count
);

//Make the REST call
$data = (array) $cb->$api($params);

//Output result in JSON, getting it ready for jQuery to process
echo json_encode($data);

?>