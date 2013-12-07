<?php
Class pani
{
	private $DB;
	

	public function __construct($DB)
	{
      if(!isset($_SESSION))
      {
      	session_start();
      }
      if(!isset($_SESSION['pani']))
      {
      	$_SESSION['pani']=array();
      }
      $this->DB =$DB;
      if(isset($_GET['delete']))
      {
      	$this->delete($_GET['delete']);
      }
	}
	/*function getUser()
	{
      return $this->util;
	}

	
	function getUtil()
	{
		return $this->util;
	}*/
	public function add($id_produit)
	{
		if(isset($_SESSION['pani'][$id_produit]))
			
		{	
           $_SESSION['pani'][$id_produit]++;
        }
        else
        {
        	$_SESSION['pani'][$id_produit] = 1;
        }
	}
	    public function delete($id_produit)
	 {
		unset($_SESSION['pani'][$id_produit]);
	 }
	  /*public function removePanier($id_produit)
	{
		unset($_SESSION['panier'][$id_produit]);
	}*/
	public function montant()
	{
		$montant=0;
		$id=array_keys($_SESSION['pani']);
		if(empty($id))
		{
			$produit=array();

		}
		else
		{
			$produit = $this->DB->query('SELECT * FROM produit WHERE idProduit IN('.implode(',', $id).')');
		}
		foreach ($produit as $p) {
			# code...
			$montant += $p->prix * $_SESSION['pani'][$p->idProduit];
		}
		return $montant;
	}

	public function count()
	{
		return array_sum($_SESSION['pani']);
	}



/*	}
	public function count()
	{
		array_sum($_SESSION['panier'][$id_produit]);
	}
*/

}
?>