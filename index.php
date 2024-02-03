<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>.
    <link rel="stylesheet" href="./assets/styles/index.css">
</head>
<body>
<div class = "parent">
    <div class = "child">
    <form method="post" action="./models/add.php"> 
        <input type="text" placeholder="add task" name = "akong_task">
        <input type="submit" value = "add"> 
    </form>
    <table>
        <thead>
            <tr>
                    <th>Number</th>
                    <th>Task</th>
                    <th>Action</th>
                </tr>
        </thead>
        <tbody>
            <?php
            
            $i = 1;
         require_once("db.php");
         $result = mysqli_query($conn,"SELECT * FROM tasks");
         while ($row = mysqli_fetch_array($result)):
            ?>
            <tr>
                <td class = "lmao"><?php echo $i ?></td>
                <td class = "lmao"><?php echo $row['task'] ?></td>
                <td class = "lmao">
                    <a id = "delete" href="./models/delete.php?id=<?php echo $row['id']?>">delete</a>
                    <a id = "update" href="./models/update_page.php?id=<?php echo $row['id']?>">update</a>
                </td>
            </tr>
            <?php $i++;
            endwhile;
            ?>

        </tbody>
    </table>
    </div>
</div>


    

</body>
</html>