<?php 

include('..\model\clsproduit.php');

$produit = new clsproduit();

$idvariable=$_GET['variable'];

$produit->supprimer_produit($idvariable);

include('../view/executionencours.php');

?>