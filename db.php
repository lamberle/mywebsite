<?php
	try {
		$db = mysqli_connect ($hote, $user, $pass, $base) or die (mysqli_connect_error ());
		if (!$db) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
		function db() { global $db; return $db; }
		function db_query($query) {return mysqli_query(db(), $query);}
		function db_error() {return mysqli_error(db());}
		function db_fetch_assoc($r) {return mysqli_fetch_assoc($r);}
		function db_num_rows($r) {return mysqli_num_rows($r);}
		
	} catch (Exception $e) {
		$db = mysql_connect ($hote, $user) or die (mysql_error ());
		$ret = mysql_select_db ($base, $db) or die ('Echec lors de la connexion: '.mysql_error ());
		function db() { global $ret; return $ret; }
		function db_query($query) {return mysql_query($query);}
		function db_error($query) {return mysql_error();}
		function db_fetch_assoc($r) {return mysql_fetch_assoc($r);}
		function db_num_rows($r) {return mysql_num_rows($r);}
	}

