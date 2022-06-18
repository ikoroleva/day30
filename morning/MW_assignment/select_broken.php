<?php

require_once ('DB.php');
require_once ('Country.php');

$success = DB::connect('localhost', 'world', 'root', '');

$query = "SELECT * FROM `countries`";

$resultList = DB::select($query, [], 'Country');

header('Content-type: application/json');
echo json_decode($resultList);

