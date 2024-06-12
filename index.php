<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'config/static.php';
include_once 'controllers/main.php';
include_once 'function/main.php';
include_once 'config/env.php';
include_once 'controllers/routes.php';

new Router();