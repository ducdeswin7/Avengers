<?php
// connexion mysql
require('connect.php');


$sql = "SELECT
				page,
	            title,
	            body,
	            css
			FROM
				`avengers`
			WHERE
				`page` = '".$_GET['page']."'
			";
if(!($result = $db->query($sql))){
	die('erreur SQL');
}
if( isset( $_GET['page'] ) && $result->num_rows > 0 ) {
	$page_courante = $_GET['page'];
} else {
	header( 'Location: index.php?page=accueil' );
	die();
}
$row = $result->fetch_assoc();
$title = $row['title'];
$body = $row['body'];
$css = $row['css'];
// afficher le header
include( 'header.php' );
// afficher le contenu
echo $body;
// afficher le footer
include( 'footer.php' );
