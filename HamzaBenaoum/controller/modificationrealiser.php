<?php 

include('..\model\clsproduit.php');
$produit = new clsproduit();



$id=$_POST['id'];
$nomproduit=$_POST['nomproduit'];
$categorie=$_POST['categorie'];
$couleur=$_POST['couleur'];
$prix=$_POST['prix'];
$quantite=$_POST['quantite'];
$description=$_POST['description'];
$testimage=$_POST['testimage'];


if($_FILES["image"]["size"]==0)
{
$produit->modifier_produit($id,$nomproduit,$description,$testimage,$prix,$couleur,$quantite,$categorie);
}
else
{

$image='C:/xampp/htdocs/Ochoco/view/img/products/';
$image=$image.basename($_FILES["image"]["name"]);

move_uploaded_file($_FILES['image']['tmp_name'],$image);
$produit->modifier_produit($id,$nomproduit,$description,$image,$prix,$couleur,$quantite,$categorie);

}

include ('..\view\executionencours.php');

?>