<?php
// user name: shilpa poloju
//course: CMPS 5303 advance database management system

// connect
$m = new MongoClient();

// select a database
$db = $m->spoloju;

// select a collection (analogous to a relational database's table)
$collection = $db->random_people;

$json = file_get_contents("http://api.randomuser.me/?results=1000");//receiving contents from the mentioned link

     
   $json_array = json_decode($json);	    
	for($i=0;$i<sizeof($json_array->results);$i++)
    {
        $collection->insert($json_array->results[$i]);
    }   
?>




   
