<?php

// Debug. Désactiver en prod
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', true);

// Rien de plus !!
include_once "db.php";
include_once "tools.php";
session_start(); 
include_once "controller/route.php";


