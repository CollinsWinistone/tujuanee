<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword ="";
$dBName = "cosa_tujuane";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
