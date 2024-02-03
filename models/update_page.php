<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div>
    <?php
    
    require_once("../db.php");

    $id = $_GET['id'];
    $result = mysqli_query($conn,"SELECT * FROM tasks WHERE id = '$id'");
    while ($row = mysqli_fetch_array($result)){
        $task = $row['task'];
    }
    ?>
<form action = "update.php" method="post">

<?php if (isset ($_GET['error'])) {?>
<p>
    <?php
    echo $_GET['error'];
    ?>
</p>
<?php
}?>
<input type="text" name = "task" value = "<?php echo $task; ?>" >
<input type="submit" value = "update" >
<input type="hidden" name = "id" value ="<?php echo $id; ?>">
</form>
</div>



</body>
</html>