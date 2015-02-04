<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 12/01/2015
 * Time: 11:52
 */
require('connect.php');


if(count($_POST)>0) {

    $sql = "INSERT INTO
            `avengers`
            (
            `page`,
            `title`,
            `menu_title`,
            `body`,
            `css`
            ) VALUES (
            '" . $db->real_escape_string($_POST['page']) . "',
			'" . $db->real_escape_string($_POST['title']) . "',
			'" . $db->real_escape_string($_POST['menu_title']) . "',
			'" . $db->real_escape_string($_POST['body']) . "',
			'" . $db->real_escape_string($_POST['css']) . "'
            )
            ";
    if (!$db->query($sql)) {
        die($db->error);
    }
}

    header('location:admin_page.php');


