<?php
$id_Admin = $_GET['id'];
include_once"../connect_ddb.php";
$sql = "DELETE FROM admin where Id_Admin = $id_Admin";
if (mysqli_query($conn, $sql)){
    header("location:showUser.php?message=DeleteSuccess");

}
else{
    header("location:showUser.php?message=DeleFail");

}
