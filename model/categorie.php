<?php
 class Categorie
{
	private  $id;
	private  $categorie;
	private $db;
	//Constructeur de la classe categorie
    public function __construct(){
		$this->db = new db();
	}
    /**
	**	id
	**/
	public function getId() {
       
       return $this->id;
    }
    public function setId($id) {
       
       $this->id =$id; 
    }
    /**
	**  Categorie
	**/
    public function getCategorie() {
       
       return $this->categorie;
    
    }
    public function setCategorie($categorie){
 
       $this->categorie =$categorie; 
    }
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $this->id;
	}
    }
?>