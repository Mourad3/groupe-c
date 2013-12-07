<?php 

// ceci est le controleur frontal :
// son rôle est de rediriger  les requettes de l'internaute vers les différents controleurs de notre application

session_start();

	if (!empty($_GET['page']) && is_file($_GET['page'].'.php')){
        include $_GET['page'].'.php';
	}

	else{
        include '../index.php';
	}

	mysql_close();
	include('Controleur/' . $c .'.php');

?>