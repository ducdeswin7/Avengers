<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 12/01/2015
 * Time: 13:49
 */
require('connect.php');
$id= $_GET['id'];
$sql="DELETE FROM avengers WHERE id='$id'";

$result=$db->query($sql);
header('location:admin_page.php');