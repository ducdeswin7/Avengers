<?php
/**
 * Created by PhpStorm.
 * User: PHRENEL
 * Date: 02/02/2015
 * Time: 11:06
 */
/*CONNEXION A LA BASE DE DONNEE*/
try{
    $db = new mysqli( 'localhost', 'root', 'root', 'avengers' );
}catch(mysqli_sql_exception $e){
    die('Probleme de connexion');
}

?>