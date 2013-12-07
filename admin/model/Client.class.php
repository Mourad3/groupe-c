<?php
include_once ("../lib/db.php");
 class Client extends db
{
	private  $id;
	private  $nom_client;
	private  $prenom_client;
	private  $sexe;
	private  $dateNaiss;
	private  $adresse;
	private  $email;
//Constructeur de la classe client
    public function __construct(){
	parent::connecte();
	}

    /**
	**	id_client
	**/
	public function getId() {
       
       return $this->id;
    }
    public function setId($id) {
       
         $this->id =$id; 
    }
    /**
	**  nom_client
	**/
    public function getNom_client() {
       
       return $this->nom_client;
    
    }
    public function setNom_client($nomclient){
 
         $this->nom_client =$nomclient; 
    }
    /**
	**  prenom_client
	**/
    public function getPrenom_client() {  
       
       return $this->prenom_client;
    
    }
    public function setPrenom_client($prenomclient) {
 
         $this->prenom_client =$prenomclient; 
    }
	/**
	**  sexe
	**/
    public function getSexe() {
       
       return $this->sexe;
    
    }
    public function setSexe($sexe){
 
         $this->sexe =$sexe; 
    }
    /**
	** Date Naissance
	**/
    public function getDateNaiss() {  
       
       return $this->dateNaiss;
    
    }
    public function setDateNaiss($dateNaiss) {
 
         $this->dateNaiss =$dateNaiss; 
    }
	/**
	** Adresse
	**/
    public function getAdresse() {  
       
       return $this->adresse;
    
    }
    public function setAdresse($adresse) {
 
         $this->adresse =$adresse; 
    }
	/**
	** Email
	**/
    public function getEmail() {  
       
       return $this->email;
    
    }
    public function setEmail($email) {
		$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
		if(preg_match($Syntaxe,$email))  
		$this->email =$email;          
    }
	
	public function __toString(){
	return $id;
	}
	
     	public function SupprimerClient($id)
	{
	$req="DELETE FROM client WHERE idClient={$id}";
	mysql_query($req) or die("Erreur :".mysql_error());
	echo "<script type='text/javascript'>alert('supprimé avec succès ...');</script>";
	}
	
	static public function ListeClients()
	{
        $result = mysql_query("select * from client");
		$items = array();

	 while ($ligne = mysql_fetch_assoc($result)) {
            	$item = new Client();
            	$item->setId($ligne['idClient']);
            	$item->setNom_client($ligne['nomClient']);
            	$item->setPrenom_client($ligne['prenomClient']);
				$item->setSexe($ligne['sexe']);
				$item->setDateNaiss($ligne['dateNaissClient']);
				$item->setAdresse($ligne['adresseClient']);
				$item->setEmail($ligne['emailClient']);
            	$items[] = $item;
        }
        return $items;
	}	
	
    }
?>
