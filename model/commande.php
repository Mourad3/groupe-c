<?php
include('model/client.php');
include('model/produit.php');
class Commande
{
	private $client;
	private $produit;
	private $statut;
	private $dateCommande;
	private $db;
	//Constructeur par défaut de la classe Commande
	public function __construct(){
		$this->db = new db();
	}
	/**
	**	Client
	**/
	public function getClient(){
		return $this->client;
	}
	public function setClient(Client $client){
		 $this->client=$client;
	}
	/**
	**	Produit
	**/
	public function getProduit(){
		return $this->produit;
	}
	public function setProduit(Produit $produit){
		 $this->produit=$produit;
	}
	/**
	**	Statut
	**/
	public function getStatut(){
		 return $this->statut;
	}
	public function setStatut($statut){
		 $this->statut=$statut;
	}
	/**
	**	Date Commande
	**/
	public function getDateCommande(){
		return $this->dateCommande;
	}
	public function setDateCommande($dateCommande){
		 $this->dateCommande=$dateCommande;
	}	
	
}	