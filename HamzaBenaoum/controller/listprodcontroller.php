<?php

include '../includes/headeradmin.inc';
include('../model/clsproduit.php');

$produit = new clsproduit();
$resultat=$produit->liste_produit();



?>