<?php
class db{	
	public function __construct(){
		mysql_connect(HOST_DB, USER_DB, PASS_DB) or die("erreur de connexion avec le serveur web");
		mysql_select_db(NAME_DB)or die ("erreur de connexion avec la base de donnée");
	}
	
	public function executeQuery($sql){
		
		return mysql_query($sql)or die ('Ereur sql!'.$sql.'<br/>'.mysql_error());
	
	}	
	public function __destruct(){
		mysql_close();
	}	
	
}
?>