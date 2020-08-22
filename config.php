<?php

$host = 'ec2-3-213-102-175.compute-1.amazonaws.com';
$port = 5432;
$dbname = 'dc3u745blljbg3';
$user = 'klkpurjzqcnpuh';
$password = 'b243fa85dce4e9b46894f946fdb31917e875565cfc2ae795f90ee21b4760b280';

$db = pg_connect(
    "
    host = $host
    port = $port
    dbname = $dbname
    user = $user
    password = $password
    "
) or die('Could not connect: ' . pg_last_error());;


session_start();

?>