<?php
require_once 'Config/path.php';

$controller = isset($_GET['c']) ? $_GET['c'] : DEFAULT_CONTROLLER;
$action = isset($_GET['a']) ? $_GET['a'] : DEFAULT_ACTION;

require COBTROLLER_PATH.'Controller.php';


