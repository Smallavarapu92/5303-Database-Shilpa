<?php
error_reporting(0);
$db = new mysqli('localhost', 'spoloju', 'jaisrikrishna@8', 'spoloju');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Gets 1000 users from the randomuser api, and loads it into a variable called $json
$json = file_get_contents("http://api.randomuser.me/?results=1000");

// This turns the variable into a PHP object
$json_array = json_decode($json);


for($i=0;$i<sizeof($json_array->results);$i++){
    $Gender = $json_array->results[$i]->user->gender;
    $Title = $json_array->results[$i]->user->name->title;
	$First = $json_array->results[$i]->user->name->first;
	$Last = $json_array->results[$i]->user->name->last;
	$Street = $json_array->results[$i]->user->location->street;
	$City = $json_array->results[$i]->user->location->city;
	$State = $json_array->results[$i]->user->location->state;
	$Zip = $json_array->results[$i]->user->location->zip;
	$Email = $json_array->results[$i]->user->email;
	$Username = $json_array->results[$i]->user->username;
	$Password = $json_array->results[$i]->user->password;
	$Dob = $json_array->results[$i]->user->dob;
	$Phone = $json_array->results[$i]->user->phone;
	$Picture = $json_array->results[$i]->user->picture->medium;
	
	echo "'$Gender','$Title','$First','$Last','$Street','$City','$State','$Zip','$Email','$Username','$Password','$Dob','$Phone','$Picture'";

	$sql1 = "select * from users where Email='{$Email}'";
	if(!$result1 = $db->query($sql1)){
		die('There was an error running the query [' . $db->error . ']');
	}
	//$rows = $value->num_rows;
	//$num = $value->num_rows;
	//echo "'$value->num_rows'";
	//echo "$rows";
	
if(!$result1->num_rows>0){
	$sql2 = <<<SQL
    INSERT into users
    VALUES('$Gender','$Title','$First','$Last','$Street','$City','$State','$Zip','$Email','$Username','$Password','$Dob','$Phone','$Picture'); 
SQL;
	if(!$result = $db->query($sql2)){
		die('There was an error running the query [' . $db->error . ']');	
	}
}

}