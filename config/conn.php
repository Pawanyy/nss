<?php
require_once dirname(__DIR__) . '/bootstrap.php';
session_start();

$database = new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS']);

$conn = $database->getConnectionMysqli();

$helper = new Helper();