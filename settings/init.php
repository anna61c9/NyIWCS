<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "iwcs";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "totallychaos.dk.mysql";
    $DB_NAME = "totallychaos_dkiwcs";
    $DB_USER = "totallychaos_dkiwcs";
    $DB_PASS = "iwcs777";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);





