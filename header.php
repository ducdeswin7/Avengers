<?php
    if(!isset($title)){
        $title = "Le dev est un boulet de oufffffff";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="Page-Exit" content="revealTrans(Duration=2,Transition=23)" />
    <meta name="description" content="Avengers : L'ère d'Ultron - film 2015, avengers 2 age of ultron">
    <META NAME="keywords" CONTENT="Avengers : L'ère d'Ultron - film 2015, avengers 2 age of ultron,marvel,avengers, film 2015,Avengers : L'ère d'Ultron,avengers 2 age of ultron,hulk, iron-man, captain america, thor,quilksiver,fury,widow,witch,ultron,hawkeye ">
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
                <?php
                $sql = "SELECT
				page,
				menu_title
			FROM
				avengers
			";
                if(!($result = $db->query($sql))){
                    die('erreur SQL header');
                }
                ?>

                <?php while( $row = $result->fetch_assoc()): ?>
                    <li><a href="index.php?page=<?php echo $row['page'];?>"><?php echo $row['menu_title']?></a></li>
                <?php endwhile;?>
            <img class="nav_flare" src="img/flare.png">
            </ul>
	    </nav>
    </header>

<div id="page-content">


