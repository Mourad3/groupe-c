<?php
require('config/db_config.php');
if(isset($_GET['c']))
$c = $_GET['c'];
else 
$c='accueil';
include('controller/' . $c .'.php');
?>