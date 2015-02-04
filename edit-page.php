<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 12/01/2015
 * Time: 13:02
 */

require('connect.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=""/>
    <title>admin-Page</title>
</head>
<body>


    <?php
    $id= $_GET['id'];
    $sql="SELECT
          *
           FROM
            `avengers`
            WHERE
            `id`=".$id."
    ";
    $result=$db->query($sql);
    $row=$result->fetch_array();
    ?>

<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']?>"/><br/>
    <label for="page">page :</label><input type="text" name="page" value="<?php echo $row['page']?>"/><br/>
    <label for="title">title :</label><input type="text" name="title" value="<?php echo $row['title']?>"/><br/>
    <label for="menu_title">Menu title :</label><input type="text" name="menu_title" value="<?php echo $row['menu_title']?>"/><br/>
    <label for="body">body :</label><textarea type="text" name="body"><?php echo $row['body']?></textarea><br/>
    <label for="css">css :</label><textarea type="text" name="css"><?php echo $row['css']?></textarea><br/>
    <input type="submit"/>
</form>
</body>
</html>