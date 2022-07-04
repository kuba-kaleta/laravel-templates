<?php

/* ========================================================================================
Name: index.php
Comment: Restapi testing
Sample URL: http://localhost/laravel-templates/examples/rest/index.php/user/list?limit=20
Code comes from: https://zditect.com/code/php/how-to-build-a-simple-rest-api-inphp.html
======================================================================================== */

require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
if ((isset($uri[5]) && $uri[5] != 'user') || !isset($uri[6])) {
    print("HTTP/1.1 404 Not Found");
    exit();
}
require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
$objFeedController = new UserController();
$strMethodName = $uri[6] . 'Action';
$objFeedController->{$strMethodName}();

?>