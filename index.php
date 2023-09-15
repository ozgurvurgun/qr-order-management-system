<?php
error_reporting(E_ALL);
session_start();
ob_start();
// require __DIR__ . '/env.php';
require __DIR__ . '/autoload.php';
require 'App/Routes/routes.php';
