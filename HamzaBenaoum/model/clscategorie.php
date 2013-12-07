<?php

include('..\config\connect.php');


class clscategorie extends connexion
{

private $idcategorie;
private $nomcategorie;


function liste_categorie()
{

parent::cnx();
$sql='select * from categorie';
$resultat=mysql_query($sql);
return $resultat;

}



}


?>