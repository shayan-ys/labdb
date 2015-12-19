<?php
/**
 * Created by PhpStorm.
 * User: shaya
 * Date: 12/17/2015
 * Time: 7:05 PM
 */
echo "controller signin:<br>";
print_r($_POST);
if(isset($_POST) && is_array($_POST)
    && isset($_POST['email']) && strlen($_POST['email'])>0 && strpos($_POST['email'], '@')>1
    && isset($_POST['password']) && strlen($_POST['password'])>0
) {
    //echo "<meta http-equiv='refresh' content='0;url=http://localhost/labdb/user.php'>";
}else{
    echo "<meta http-equiv='refresh' content='0;url=http://localhost/labdb/login.php"
        ."?e=".$_POST['email']."&n=".$_POST['name']
        ."&message=invalidarg' >";
}
?>