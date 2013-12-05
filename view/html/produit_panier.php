<?php
$title='Validation du Panier';

if (isset($_SESSION['login']))
include 'view/html/includes/header.inc';
else 
include 'view/html/includes/headerlog.inc';
?>
<div class="container">
<br/>
<h2>Validation Du Panier</h2>
<form action="" method="post">
	<table border="1" width="1000">
		<tr>
		<th>Identifiant</th>
		<th>Produit</th>
		<th>Catégorie</th>
		<th>Couleur</th>
		<th>Prix</th>
		<th>description</th>		
		<th><input type="checkbox" name="v" onClick="checkAll('cases[]', this.checked);" /></th>
		</tr>
		<?php foreach($items as $item){?>
		<tr>
		<td align="center"><?php echo $item->getId();?></td>
		<td align="center"><?php echo $item->getLibelle();?></td>
		<td align="center"><?php echo $item->getCategorie();?></td>
		<td align="center"><?php echo $item->getCouleur();?></td>
		<td align="center"><?php echo $item->getPrix();?> DH</td>
		<td align="center"><?php echo $item->getDescription();?></td>		
		<td align="center"><input type ="checkbox" name="cases[]" value="<?php echo $item->getId();?>"/></td>
		</tr>
		<?php } ?>
	</table><br/>
		<b>Nombre d'achats: <?php echo $produit->NombreProduitAchetes();?></b><br/>
		<b>Prix Total: <?php echo $produit->PrixTotalProduit();?> dh</b>
	<br/>
	<center><input type="submit" value="Validation du Panier" onClick="javascript:document.getElementById('validation').value='valid';"/></center><br/>
	<input type="hidden" id="validation" name="validation" value=""/>
</form>
</center>			
</div>
<?php include 'view/html/includes/footer.inc'; ?>