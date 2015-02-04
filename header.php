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
				`page`,
				`menu_title`
			FROM
				`avengers`
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


