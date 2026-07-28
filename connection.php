<?php

$servername = "sql303.infinityfree.com";
$username = "if0_42504097";
$password = "3dtk5gR7ixokETn";   // Your vPanel/MySQL password
$dbname = "if0_42504097_edoc";

$database = new mysqli($servername, $username, $password, $dbname);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

?>