<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autosalloni_db";
$conn = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo "You are connected";
} else {
    echo "Not connected";
}
