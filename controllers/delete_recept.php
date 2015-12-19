<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 9:41 AM
 */
require_once 'database.php';
$id = (int)$_GET['id'];

$conn->query("DELETE FROM reception WHERE reception_id='".$id."' limit 1; ");

echo "<meta http-equiv='refresh' content='0;url=http://localhost/labdb/recept.php'>";
die();