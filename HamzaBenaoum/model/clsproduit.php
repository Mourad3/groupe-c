<?php
include('..\config\connect.php');


class clsproduit extends connexion {



private $idproduit;
private $type_produit_hef;
private $prix;
private $description;
private $small_description;
private $quantite;
private $date_maj;
private $idcategorie;
private $image;


function get_idproduit()
{
	return $this->$idproduit;
}

function get_type_produit_hef()
{
	return $this->$type_produit_hef;
}

function set_type_produit_hef($type_prd)
{
	$this->$type_produit_hef=$type_prd;
}



function get_prix()
{
	return $this->$prix;
}


function set_prix($prix)
{
	$this->$prix=$prix;
}



function get_description()
{
	return $this->$description;
}

function set_description($description)
{
	$this->$description=$description;
}


function get_small_description()
{
	return $this->$small_description;
}

function set_small_description($small_description)
{
	$this->$small_description=$small_description;
}


function get_quantite()
{
	return $this->$quantite;
}


function set_quantite($quantite)
{
	$this->$quantite=$quantite;
}

function get_date_maj()
{
	return $this->$date_maj;
}


function set_date_maj($datemaj)
{
	$this->$date_maj=$datemaj;
}

function get_idcategorie()
{
	return $this->$idcategorie;
}

function get_nom_categorie($id_categ)
{
	parent::cnx();
	$sql="select * from categorie where idCategorie='".$id_categ."'";
	$resultat=mysql_query($sql) or die(mysql_error());
	$row=mysql_fetch_array($resultat);
	return $row[1];
}

function set_idcategorie($id_categorie)
{
	$this->$idcategorie=$id_categorie;
}

function get_image()
{
	return $this->$image;
}

function set_image($img)
{
	$this->$image=$img;
}

function  ajouter_produit($nomproduit,$desc,$img,$prix,$couleur,$quantite,$idcategorie)
{
	
	parent::cnx();
	$sql='INSERT INTO produit VALUES("","'.$nomproduit.'","'.$desc.'","'.$img.'","'.$prix.'","'.$couleur.'","'.$quantite.'","'.$idcategorie.'")';
	mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
	
}

function  supprimer_produit($idprd)
{
	parent::cnx();
	$sql='delete from produit where idProduit = "'.$idprd.'"';
	mysql_query($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
}

function  modifier_produit($id,$libelleproduit,$description,$image,$prix,$couleur,$quantite,$idcat)
{
	parent::cnx();
	$sql='update produit set libelleProduit="'.$libelleproduit.'" , description="'.$description.'" , image="'.$image.'",prix="'.$prix.'",couleur="'.$couleur.'",quantite="'.$quantite.'",idCategorie="'.$idcat.'" where idProduit="'.$id.'"';
	mysql_query($sql);
}

function liste_produit()
{

parent::cnx();
$sql='select * from produit';
$resultat=mysql_query($sql) or die(mysql_error());
return $resultat ;

}

function recuperer_un_produit($id)
{

parent::cnx();
$sql='select * from produit where idProduit="'.$id.'"';
$resultat=mysql_query($sql) or die(mysql_error());
return $resultat ;

}

function recuperer_categorie()
{

parent::cnx();
$sql='select * from categorie ';
$res=mysql_query($sql) or die(mysql_error());
return $res ;

}

function recuperer_un_categorie($Id)
{

parent::cnx();
$sql='select categorie from categorie where idCategorie = "'.$Id.'"';
$res=mysql_query($sql) or die(mysql_error());
$resultat=mysql_fetch_array($res);
return $resultat ;

}






}


?>