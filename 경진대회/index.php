<?php
ini_set("display_errors", 1);
define("__ROOT", $_SERVER["DOCUMENT_ROOT"]);

//
$get = isset($_GET["param"]) ? explode("/", $_GET["param"]) : NULL;
$page = !empty($get[0]) ? $get[0] : "index";

require __ROOT."/layout/header.php";
require __ROOT."/pages/{$page}.php";
require __ROOT."/layout/footer.php";