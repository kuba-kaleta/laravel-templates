<?

require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
if ((isset($uri[4]) && $uri[4] != 'user') || !isset($uri[5])) {
    print("HTTP/1.1 404 Not Found"); //Warning: Cannot modify header information - headers already sent by (output started at C:\wamp\www\dev\rest\index.php:3)
    exit();
}
require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";
$objFeedController = new UserController();
$strMethodName = $uri[5] . 'Action';
$objFeedController->{$strMethodName}();

?>