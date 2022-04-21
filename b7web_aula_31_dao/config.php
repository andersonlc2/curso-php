<?php

$db_name = "modulo_cadastro";
$db_host = "localhost";
$db_user = "anderson";
$db_pass = "admin@123";

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host;", $db_user, $db_pass);
