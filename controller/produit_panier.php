<?php
include('../lib/db.php');
include('../model/produit_panier.php');
$produit=new Produit_Panier();
$items=$produit->listeProduit();
include('../view/html/produit_panier.php');
?>