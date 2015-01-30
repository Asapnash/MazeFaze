<?php 

Function getConnection() {

    $host = '194.81.104.22' ;
    $dbUser ='15400096';
    $dbPass ='15400096';
    $dbName ='CSY2028_15400096';

    // create a new database object
    $db = new MySQL($host , $dbUser , $dbPass , $dbName );
    return $db;
}

Function getDatabase() {
	$db = getConnection();
    $db->selectDatabase();
	return $db;
}

Function getNewDatabase() {

 	$db = getConnection();
    // drop the database and then create it again
	$db->dropDatabase();
	$db->createDatabase();

	// select the database
	$db->selectDatabase();
	return $db;
}


?>