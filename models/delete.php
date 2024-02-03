<?php
require_once("../db.php");



if (isset($_GET["id"])) {
$id = $_GET["id"];
mysqli_query($conn,"DELETE FROM tasks WHERE id = '$id'");
header("location:../index.php");
}



?>