<?php
$mysqli = new mysqli('localhost', 'root', '', 'user_management_db');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

echo 'Connection successful!';
$mysqli->close();
?>
