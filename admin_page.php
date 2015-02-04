<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 12/01/2015
 * Time: 10:12
 */
require('connect.php');?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=""/>
    <title>admin-Page</title>
</head>
<body>
<div class="container">
    <table style="border: 1px">
        <tr>
            <td>Id</td>
            <td>Nom de la page</td>
            <td>Titre</td>
            <td>Voir la page</td>
            <td>Action</td>
        </tr>
        <?php
    $sql="SELECT * FROM `avengers` ORDER BY `id` DESC ";
    if($result = $db->query($sql)) {
        while($row = $result->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['page']?></td>
                <td><?php echo $row['title']?></td>
                <td><a href="index.php?page=<?php echo $row['page'];?>">Open</a></td>
                <td><a href="">Add page</a></td>
                <td><a href="edit-page.php?id=<?php echo $row['id']?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
            </tr>
        <?php
        }
    }
    ?>
    </table>

    <form action="insert.php" method="POST">
        <label for="page">page :</label><input type="text" name="page"/><br/>
        <label for="title">title :</label><input type="text" name="title"/><br/>
        <label for="menu_title">Menu title :</label><input type="text" name="menu_title"/><br/>
        <label for="body">body :</label><textarea type="text"name="body"></textarea><br/>
        <label for="css">css :</label><input type="text" name="css"/><br/>
        <input type="submit"/>
    </form>
</div>
</body>
</html>

