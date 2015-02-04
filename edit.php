<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 12/01/2015
 * Time: 11:52
 */
require('connect.php');




    $sql = "UPDATE
            `avengers`
            SET
            `page`='" . $db->real_escape_string($_POST['page']) . "',
            `title`='" . $db->real_escape_string($_POST['title']) . "',
			`menu_title`='" . $db->real_escape_string($_POST['menu_title']) . "',
			`body`='" . $db->real_escape_string($_POST['body']) . "',
			`css`='" . $db->real_escape_string($_POST['css']) . "'
            WHERE
            `id`='".(int)$_POST['id']."'
            ";
    if (!$db->query($sql)) {
        die($db->error);
    }

header('location:admin_page.php');