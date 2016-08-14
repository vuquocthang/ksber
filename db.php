<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/13/2016
 * Time: 10:28 PM
 */
//include "validate_form.php";
//echo "<br> this is db file";

$conn = new mysqli('localhost', 'root', '', 'girl');

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}




mysqli_set_charset($conn,"utf8");


?>