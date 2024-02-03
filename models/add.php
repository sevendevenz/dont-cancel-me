<?php

$conn = mysqli_connect("localhost","root","","todolistniawrab");

$task = $_POST ["akong_task"];
mysqli_query($conn,"INSERT INTO tasks (task) VALUES ('$task')");

header("location: ../index.php" );
?>