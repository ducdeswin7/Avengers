<?php
	// declaration des pages
	$les_pages = array();
	$les_pages['accueil'] = array(
		'file' => 'accueil.php' ,
		'menu_title' => 'Accueil',
		'title' => 'accueils'
	);
	$les_pages['personnages'] = array(
		'file' => 'personnage.php' ,
		'menu_title' => 'personnages',
		'title' => 'personnages'
	);
	$les_pages['galerie'] = array(
		'file' => 'galerie.php' ,
		'menu_title' => 'galerie',
		'title' => 'galerie'
	);
	$les_pages['teaser'] = array(
		'file' => 'teaser.php' ,
		'menu_title' => 'teaser',
		'title' => 'tease'
	);
	if( isset( $_GET['page'] ) && isset( $les_pages[$_GET['page']] )) {
		$page_courante = $_GET['page'];
	} else {
		header( 'Location: index.php?page=accueil' );
		die();
	}
	$title = $les_pages[$page_courante]['title'];
	// afficher le header
	include( 'header.php' );
	// afficher le contenu
	include( $les_pages[$page_courante]['file'] );
	// afficher le footer
	include( 'footer.php' );