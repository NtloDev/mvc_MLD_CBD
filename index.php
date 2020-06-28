<?php
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define("URL","http://localhost/mvc_MLD_cbd/");
require_once(ROOT.'libs/Router.php');
$router = new Router();
$router->route();



