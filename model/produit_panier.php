<?php
include('../model/panier.php');
include('../model/produit.php');
class Produit_Panier
{
	private $produit;
	private $panier;
	//Constructeur par défaut de la classe Produit_Panier
	public function __construct(){
		$this->db = new db();
		$_SESSION["login"]='reda48';
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
	**	Panier
	**/
	public function getPanier(){
		return $this->panier;
	}
	public function setPanier(Panier $Panier){
		 $this->panier=$panier;
	}
	public function listeProduit()
	{	
		$login=$_SESSION["login"];
		$sql1="select p.idPanier as idPanier from panier p,client c,espace_personnel e where p.idPanier=c.idPanier and c.id_espace=e.id_espace and e.login='".$login."'";
		$req1=mysql_query($sql1);
		$data1=mysql_fetch_assoc($req1);
		$idPanier=$data1['idPanier'];		
		$query = "select * from produit pr,produit_panier pp,panier pa where pr.idProduit=pp.idProduit and pp.idPanier=pa.idPanier and pa.idPanier='".$idPanier."'";
		$res = mysql_query($query);
        $items = array();
        while ($ligne = mysql_fetch_assoc($res)) {
            $item = new Produit();
            $item->setId($ligne['idProduit']);
            $item->setLibelle($ligne['libelleProduit']);
            $item->setDescription($ligne['description']);
            $item->setPrix($ligne['prix']);
			$cat=new Categorie();
			$cat->setId($ligne['idCategorie']);
			$item->setCategorie($cat);
            $items[] = $item;
        }
	return $items;
	}
}