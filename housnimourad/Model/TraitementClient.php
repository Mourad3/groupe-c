<?php

class TraitementClient
{

//Déclaration des attributs
private $_nom;
private $_email;
private $_telephone;
private $_addresse;
private $_ville;
private $_civilite;
private $_mdp;
private $_codepost;
private $_prenom;
public $cle_cryptage = 'po1kuFz23ukDm4l'; 
private $link;


    public function __construct($host, $user, $password, $database) 
    {
       
        $this->link = mysql_connect($host, $user, $password) or die('impossible de se connecter a la base de donnée locale');
        
        mysql_select_db($database, $this->link) or die('La base de donnée est introuvable');  
    }
 public function CryptagePass($mot_de_passe) 
    {
    $this->mot_de_passe_crypte = crypt($mot_de_passe, $cle_cryptage);
    }
public function EnvoiDonneeVerifie ($_nom, $_email, $_telephone, $_addresse, $_ville, $_civilite,$_mdp,$_codepost,$_prenom) 
    {
     $this->nom = htmlentities($nom, ENT_QUOTES);
     $this->email = htmlentities($email, ENT_QUOTES);
     $this->telephone = htmlentities($telephone, ENT_QUOTES);
     $this->adresse = htmlentities($adresse, ENT_QUOTES);
     $this->ville = htmlentities($ville, ENT_QUOTES);
     $this->civilite = htmlentities($civilite, ENT_QUOTES);
      $this->mdp = htmlentities($mdp, ENT_QUOTES);
     $this->codepost = htmlentities($codepost, ENT_QUOTES);
     $this->prenom = htmlentities($prenom, ENT_QUOTES);
     
     $query = mysql_query("INSERT INTO `client` (`nom`, `email` , `telephone` , `adresse` , `ville` , `civilite`, `mdp`, `codepost` ,`prenom`) 
     VALUES ('', '" . $this->nom. "', '" . $this->email . "', '" . $this->telephone . "', '" . $this->adresse . "', '" . $this->ville . "',
     '" . $this->civilite . "', '" . $this->mdp . "','" . $this->codepost . "','" . $this->prenom . "' )") or die('impossible d\enregistrer les données dans la table');
    }
}
?>