<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 9:00 AM
 */
if(isset($_SESSION) && isset($_SESSION['email']))
    unset($_SESSION['email']);
if(isset($_SESSION) && isset($_SESSION['pass']))
    unset($_SESSION['pass']);
?>
