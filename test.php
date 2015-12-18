<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/17/15
 * Time: 11:26 PM
 */
//if (isset($_COOKIE['email'])) {
//    unset($_COOKIE['email']);
//    unset($_COOKIE['password']);
//    setcookie('email', null, -1, '/');
//    setcookie('password', null, -1, '/');
//    echo 'cleared';
//    return true;
//} else {
//    echo 'not set';
//    return false;
//}

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

$sql = "SELECT * FROM actor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["actor_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();