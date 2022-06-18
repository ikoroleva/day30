<?php

require_once ('DB.php');
require_once ('Country.php');

DB::connect('localhost', 'world', 'root', '');

$name = $_GET["name"];
$continent = $_GET["continent"];
$population = $_GET["population"];

$query = "SELECT * FROM `countries` WHERE 1"; // the where 1 condition should be useful for you
$queryParams = [];

if(isset($name)){

    $query = $query . " AND `name` LIKE ?";
    $queryParams[] = $name . '%';
} 

if (isset($continent)){

        $query = $query . " AND `continent` LIKE ?";
        $queryParams[] = $continent . '%';
}

if (isset($population)){

    $query = $query . " AND `population` > ?";
    $queryParams[] = $population;
}

$resultList = DB::select($query, $queryParams, 'Country');

header('Content-type: application/json');
echo json_encode($resultList);


// write your code here

// $queryParams = [$name, $continent, $population];

// $query = "SELECT * FROM `countries` 
// WHERE `name` LIKE ? 
//         AND `population` > ?"; // the where 1 condition should be useful for you
// }





//var_dump($resultList);
