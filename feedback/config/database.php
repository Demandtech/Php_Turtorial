<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'demand');
define('DB_PASS', '1234567');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection

if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}