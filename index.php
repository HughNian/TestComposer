<?php
define("BASE_PATH", __DIR__);

require BASE_PATH.'/vendor/autoload.php';

$con_act = array_filter(explode('/', $_SERVER['REDIRECT_URL']));
if(isset($con_act[1])){
	$con = "controller\/" . ucfirst($con_act[1]) . "Controller";
	$con = str_replace("/", "", $con);
}
else
	die("controller is not define");

if(isset($con_act[2]))
	$act = $con_act[2];
else
	die("action is not define");

parse_str($_SERVER['QUERY_STRING'], $G);

$app = new $con;
$app->$act($G);