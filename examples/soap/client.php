<?php

/* ========================================================================================
Name: soap/client.php
Comment: Soap testing
Code comes from: https://www.w3programmers.com/soap-with-php-and-mysql/
======================================================================================== */

require_once('lib/nusoap.php');
$c = new soapclient('http://localhost/laravel-templates/examples/soap/serv.php?wsdl');

// $functions = $c->__getFunctions ();
// var_dump ($functions);

$stockprice = $c->getStockQuote(array('number', 1));
echo "The stock price for a is $stockprice.";

?>
