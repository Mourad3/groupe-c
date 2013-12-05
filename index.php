<?php 

// ceci est le controleur frontal :
// son rôle est de rediriger  les requettes de l'internaute vers les différents controleurs de notre application
if(isset($_GET['c']))
$c = $_GET['c'];
else 
$c='accueil';

include('Controleur/' . $c .'.php');

?>