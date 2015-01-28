<?php
    if(!isset($title)){
        $title = "Le dev est un boulet";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=2,Transition=23)" />
    <title><?php echo $title?></title>
     <link rel="stylesheet" href="css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
		<nav>
            <ul>
            <li id="logoNav"><a class="page-link" href="index.php"><img src="img/petitLogo.png" alt="Accueil" width="40px" height="40px"></a></li>
            <?php foreach( $les_pages as $page => $definition ): ?>
            <li><a class="page-link" href="index.php?page=<?php echo $page;?>"><?php echo $definition['menu_title']?></a></li>
            <?php endforeach;?>
            <img class="nav_flare" src="img/flare.png">
            </ul>
	    </nav>
    </header>

<div id="page-content">