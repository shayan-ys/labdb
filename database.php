<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 12:56 AM
 */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sakila";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}