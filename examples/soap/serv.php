<?php

/* ========================================================================================
Name: soap/serv.php
Comment: Soap testing
Code comes from: https://www.w3programmers.com/soap-with-php-and-mysql/
======================================================================================== */

require('lib/nusoap.php');

function getStockQuote($number)
{
    $conn = mysqli_connect('localhost', 'test', 'test', 'rest_api_demo');
    $query = "SELECT user_id FROM users";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    print($number);
    return $row['user_id'];
}

$server = new soap_server();
$server->configureWSDL('demo', 'urn:demo');
$server->register("getStockQuote", ['number' => 'xsd:decimal'], ['return' => 'xsd:decimal'],);

// $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service(file_get_contents("php://input")); // $server->service($HTTP_RAW_POST_DATA);

?>

