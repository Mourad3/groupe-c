<?php
class Client
{
// Déclaration des attributs

private $link;

private $_nom;
private $_email;
private $_telephone;
private $_addresse;
private $_ville;
private $_civilite;
private $_mdp;
private $_codepost;
private $_prenom;

public function getnom(){return $this->_nom;}
public function setnom($value){$this->_nom=$value;}
public function getemail(){return $this->_email;}
public function setemail($value){$this->_email=$value;}
public function gettelephone(){return $this->_telephone;}
public function settelphone($value){$this->_telephone=$value;}
public function getaddresse(){return $this->_addresse;}
public function setaddresse($value) {$this->_addresse=$value;}
public function getville(){return $this->_ville;}
public function setville($value){$this->_ville=$value;}
public function getcivilite(){return $this->_civilite;}
public function setcivilite($value){$this->_civilite=$value;}
public function getmdp(){return $this->_mdp;}
public function setmdp($value){$this->_mdp=$value;}
public function getcodepost(){return $this->_codepost;}
public function setcodepost($value){$this->_codepost=$value;}
public function getprenom(){return $this->_prenom;}
public function setprenom($value){$this->_prenom=$value;}

//Voici les méthodes
    public function __construct($host, $user, $password, $database) 
    {
        $this->link = mysql_connect($host, $user, $password) or die('impossible de se connecter a la base de donnée locale');
        // On selectionne la base de donnée ou sinon on affiche un message d'erreur.        
        mysql_select_db($database, $this->link) or die('La base de donnée est introuvable');
    }

    public function VerificationRemplissageNom($nom) 
    {
        if(empty($nom)) // Si la variable est vide
        {
        echo 'Vous n\'avez pas renseigner votre nom de compte !<br />';  
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>'; 
        exit();
        }
    }

    public function VerificationRemplissageMail($mail) 
    {
        if (isset($mail))
        {
            if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail))
            {
            echo 'L\'adresse email n\'est pas valide, veuillez recommencer !<br />';
            echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
            exit();
            }
        }
        else
        {
        echo 'Vous n\'avez pas renseigner votre email !<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        } 
    }

    public function VerificationRemplissageTelephone($telephone)  .
    {
        if(empty($telephone))
        {
        echo 'Vous n\'avez pas renseigner votre telephone !<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }

public function VerificationRemplissageAdresse($addresse)  
    {
        if(empty($addresse))
        {
        echo 'Vous n\'avez pas renseigner votre adresse!<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }
    public function VerificationRemplissageCivilite($civilite) 
    {
        if(empty($civilite))
        {
        echo 'Vous n\'avez pas renseigner votre civilite!<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }

    public function VerificationRemplissageMdp($mdp) 
    {
        if(empty($mdp))
        {
        echo 'Vous n\'avez pas renseigner le nom de votre mot de passe !<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }

    public function VerificationRemplissageCodepost($codepost)  
    {
        if(empty($codepost))
        {
        echo 'Vous n\'avez pas renseigner le nom de votre code postal !<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }

     public function VerificationRemplissagePrenom($prenom)  
    {
        if(empty($prenom))
        {
        echo 'Vous n\'avez pas renseigner le nom de votre prenom !<br />';
        echo '<a href="inscription.php">Retour au formulaire d\'inscription</a>';
        exit();
        }
    }
}

?>