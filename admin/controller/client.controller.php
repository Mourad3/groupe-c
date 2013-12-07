<?php
include_once('../model/Client.class.php');
$client_t=new Client();
$cliens;
$clients=$client_t->listeClients();
include_once('../view/Client.view.php');
?>