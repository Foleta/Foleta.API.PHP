<?php

require_once("FoletaApiClient.php");

// Settings
$apiAddress = "API-ADDRESS";
$apiKey = "API-KEY";

// Init the client
$client = new FoletaApiClient($apiAddress, $apiKey);

// Execute request
$departments = $client->get("department/?schoolId=406&schoolYearId=72");

?>