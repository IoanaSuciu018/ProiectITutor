<?php

$servername = "localhost";
$dBUsername = "ioana";
$dBPassword = "ioana";
$dBName = "proiectfinal";

$conn = mysql_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed:".mysql_connect_error());
}