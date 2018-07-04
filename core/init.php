<?php

session_start();

$enableErrors = true;

if ($enableErrors){
    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);
}

date_default_timezone_set('America/Los_Angeles');

require 'functions/general.php';
require 'assets/Services/Twilio.php';


?>
