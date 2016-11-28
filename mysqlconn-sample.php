<?php

$host = '';
$username = '';
$passwd = '';
$dbname = '';
$port = 3306;
$socket = '';

$mysqli = new mysqli($host, $username, $passwd, $dbname, $port, $socket);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    $error = 1;
}
