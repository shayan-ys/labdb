<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 10:04 AM
 */
require_once '../database.php';
var_dump($_POST);

if($_POST['action'] == 'insert'){
    $conn->query("INSERT INTO reception (patient_id, bill_id, doctor_id) VALUE
      (".$_POST['patient_id'].", 0, ".$_POST['doctor_id']."); ");
}else{
    $query = "UPDATE reception";
    $query .= isset($_POST['doctor_id'])? "SET doctor_id='".$_POST['doctor_id']."' " : '';
//    $query .= isset($_POST['doctor_id'])? "SET doctor_id='".$_POST['doctor_id']."' " : '';
//    $query .= isset($_POST['doctor_id'])? "SET doctor_id='".$_POST['doctor_id']."' " : '';
    $query .= " WHERE reception_id=".$_POST['reception_id']."
    ; ";
    $conn->query($query);
}

echo "<meta http-equiv='refresh' content='0;url=http://localhost/labdb/recept.php'>";
die();