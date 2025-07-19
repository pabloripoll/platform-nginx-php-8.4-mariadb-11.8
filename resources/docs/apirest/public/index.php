<?php

use PDO;
use PDOException;

echo 'Platform <b>NGINX</b> + <b>PHP '.phpversion().'</b> installed succefully! <br><br>';

$dbhost = '192.168.1.41';
$dbport = '7400';
$dbname = 'miapxhd_local';
$dbuser = 'miapxhd';
$dbpass = 'J4YPuJaieJ35gNAOSQQor87s82q2eUS1';

echo 'Database:<br>'.
'Host: <b>' . $dbhost . '</b><br>'.
'Port: <b>' . $dbport . '</b><br>'.
'Name: <b>' . $dbname . '</b><br>'.
'User: <b>' . $dbuser . '</b><br>'.
'Test: <b>' . $dbpass . '</b><br>';

try {
  $conn = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpass);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Conn: <em style=\"color:green;\">$dbname connection has been set successfully.</em>";

} catch(PDOException $e) {
  echo "Conn: <em style=\"color:red;\">$dbname connection has failed:</em><br>Error: " . $e->getMessage();
}