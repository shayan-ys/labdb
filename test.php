<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/17/15
 * Time: 11:26 PM
 */

require_once 'database.php';

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