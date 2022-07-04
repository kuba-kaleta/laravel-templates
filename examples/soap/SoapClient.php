<?php

/* ========================================================================================
Name: soap/serv.php
Comment: Soap testing
Code comes from: https://github.com/mrdv2/SOAP-PHP
======================================================================================== */

require_once "lib/nusoap.php";
$client = new nusoap_client("http://localhost/laravel-templates/examples/soap/SoapServer.php");

if($_POST){
$decada = $_POST['decada'];
$parametros= array('decada'=>$decada);
$respuesta= $client->call("get_peliculas",$parametros);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAP</title>
</head>
<body>

    <form action="SoapClient.php" method="post">
        Enter decade:
        <input type="text" name="decada" id="">
        <br/>
        <input type="submit" value="Submit">
    </form>
    <?php 
    global $respuesta;
    print_r($respuesta);
    ?>
    
</body>
</html>