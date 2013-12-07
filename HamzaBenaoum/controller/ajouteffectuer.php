<?php
include('..\model\clsproduit.php');
$produit = new clsproduit();

$image='C:/xampp/htdocs/Ochoco/view/img/products/';
$image=$image.basename($_FILES["image"]["name"]);


// recuperation des données

$nomproduit=$_POST['nomproduit'];
$categorie=$_POST['categorie'];
$couleur=$_POST['couleur'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$description=$_POST['description'];

move_uploaded_file($_FILES['image']['tmp_name'],$image);
$produit->ajouter_produit($nomproduit,$description,$image,$prix,$couleur,$quantite,$categorie);
include ('../view/executionencours.php');

?>