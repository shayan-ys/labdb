<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 9:03 AM
 */
function checkSign(){
    if (!(isset($_SESSION) && isset($_SESSION['email']) && isset($_SESSION) && isset($_SESSION['pass']))) {
        echo "<meta http-equiv='refresh' content='0;url=http://localhost/labdb/login.php'>";
        die();
    }
}