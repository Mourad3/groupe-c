<?php
class db{
	
	static public function connecte(){
		mysql_connect('localhost', 'root', '')or die("erreur de connexion avec le serveur web");
		mysql_select_db('ecommerce')or die ("erreur de connexion avec la base de donnée");
	}
}
?>