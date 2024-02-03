<?php

require_once("../db.php");
$task = $_POST["task"];
$id  = $_POST["id"];
 if(empty($task)) {
    header('location: update_page.php?error=please enter a task');
 }else{
    mysqli_query($conn,"UPDATE tasks SET task = '$task' WHERE id = $id ");
    header("location: ../index.php");
 }


?>