<?php
include('model/categorie.php');
class Produit
{
	private $id;
	private $libelle;
	private $description;
	private $prix;
	private $couleur;
	private $quantite;
	private $categorie;
	
	//Constructeur par défaut de la classe Produit
	public function __construct(){
		$this->db = new db();
	}
	/**
	**	id
	**/
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}
	/**
	**	libelle
	**/
	public function getLibelle(){
		return $this->libelle;
	}
	public function setLibelle($libelle){
		 $this->libelle=$libelle;
	}
	/**
	**	description
	**/
	public function getDescription(){
		return $this->description;
	}
	public function setDescription($description){
		 $this->description=$description;
	}
	/**
	**	prix
	**/
	public function getPrix(){
		return $this->prix;
	}
	public function setPrix($prix){
		 $this->prix=$prix;
	}
	/**
	**	couleur
	**/
	public function getCouleur(){
		return $this->couleur;
	}
	public function setCouleur($couleur){
		 $this->couleur=$couleur;
	}
	/**
	**	quantite
	**/
	public function getQuantite(){
		return $this->quantite;
	}
	public function setQuantite($quantite){
		 $this->quantite=$quantite;
	}
	/**
	**	categorie
	**/
	public function getCategorie(){
		return $this->categorie;
	}
	public function setCategorie(Categorie $categorie){
		 $this->categorie=$categorie;
	}
	/**
	** fonction toString()
	**/
	public function __toString(){
	return $id;
	}	
		
}