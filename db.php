<?php
	$hote = 'localhost';
	$base = 'lamberle';
	$user = 'root';
	$pass = '';
	$db = mysql_connect ($hote, $user) or die (mysql_error ());
	$ret = mysql_select_db ($base, $db) or die ('Echec lors de la connexion: '.mysql_error ());
	function db() { global $ret; return $ret; }

