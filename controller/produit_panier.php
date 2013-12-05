<?php
include('lib/db.php');
include('model/produit_panier.php');
$produit=new Produit_Panier();
if(isset($_POST['validation'])){
$cases=$_POST['cases'];
$produit->ValidationPanier($cases);
}
$items=$produit->listeProduit();
include('view/html/produit_panier.php');
?>