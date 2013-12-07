<?php
class db{
	
	static public function connecte(){
                mysql_connect(HOST_DB, USER_DB, PASS_DB) or die("erreur de connexion avec le serveur web");
                mysql_select_db(NAME_DB)or die ("erreur de connexion avec la base de donnée");
	}
}
?>
