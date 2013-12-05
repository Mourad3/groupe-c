<?php
include('model/panier.php');
include('model/produit.php');
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
			$item->setCouleur($ligne['couleur']);
			$cat=new Categorie();
			$cat->setId($ligne['idCategorie']);
			$item->setCategorie($cat);
            $items[] = $item;
        }
	return $items;
	}
	public function NombreProduitAchetes()
	{	
		$login=$_SESSION["login"];
		$sql1="select p.idPanier as idPanier from panier p,client c,espace_personnel e where p.idPanier=c.idPanier and c.id_espace=e.id_espace and e.login='".$login."'";
		$req1=mysql_query($sql1);
		$data1=mysql_fetch_assoc($req1);
		$idPanier=$data1['idPanier'];		
		$query = "select count(*) as totalProduit from produit pr,produit_panier pp,panier pa where pr.idProduit=pp.idProduit and pp.idPanier=pa.idPanier and pa.idPanier='".$idPanier."'";
		$res = mysql_query($query);
        $data2=mysql_fetch_assoc($res);
		$nbrProduit=$data2['totalProduit'];
	return $nbrProduit;
	}
	public function PrixTotalProduit()
	{	
		$login=$_SESSION["login"];
		$sql1="select p.idPanier as idPanier from panier p,client c,espace_personnel e where p.idPanier=c.idPanier and c.id_espace=e.id_espace and e.login='".$login."'";
		$req1=mysql_query($sql1);
		$data1=mysql_fetch_assoc($req1);
		$idPanier=$data1['idPanier'];		
		$query = "select sum(pr.prix) as prixTotal from produit pr,produit_panier pp,panier pa where pr.idProduit=pp.idProduit and pp.idPanier=pa.idPanier and pa.idPanier='".$idPanier."'";
		$res = mysql_query($query);
        $data2=mysql_fetch_assoc($res);
		$prixTotal=$data2['prixTotal'];
	return $prixTotal;
	}
	public function ValidationPanier(array $Cases){
		$login=$_SESSION["login"];
		$sql1="select c.idClient as idClient from client c,espace_personnel e where c.id_espace=e.id_espace and e.login='".$login."'";
		$req1=mysql_query($sql1);
		$data1=mysql_fetch_assoc($req1);
		$idClient=$data1['idClient'];
		$sql2="select p.idPanier as idPanier from panier p,client c,espace_personnel e where p.idPanier=c.idPanier and c.id_espace=e.id_espace and e.login='".$login."'";
		$req2=mysql_query($sql2);
		$data2=mysql_fetch_assoc($req2);
		$idPanier=$data2['idPanier'];	
		foreach($Cases as $case){
		$query = "insert into commande values('".$idClient."','".$case."','en cours','".date('Y-m-d H:i:s')."')";
		mysql_query($query) or die("erreur :".mysql_error());
		$query2 = "delete from produit_panier where idProduit='".$case."' and idPanier='".$idPanier."'";
		mysql_query($query2) or die("erreur :".mysql_error());
		}
	}
}