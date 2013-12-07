<?php

class connexion
{
public $host;
public $user;
public $pw;
public $db;


public function cnx()
{

$this->host="localhost";
$this->user="root";
$this->pw="";
$this->db="ecommerce";

$connexion=mysql_connect($this->host,$this->user,$this->pw) or die (" Erreur de connexion : ".Mysql_error());
mysql_select_db($this->db,$connexion);

}

}

?>