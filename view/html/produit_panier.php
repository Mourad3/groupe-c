<?php
include 'includes/header.inc';
?>
<div class="container">
<br/>
<h2>Validation Panier</h2>
<form action="" method="" >
	<table border="1">
		<tr>
		<th>Id</th>
		<th>Libelle</th>
		<th>Prix</th>
		<th>description</th>
		<th>Categorie</th>
		<th>Validation d'achat</th>
		</tr>
		<?php foreach($items as $item){?>
		<tr>
		<td><?php echo $item->getId();?></td>
		<td><?php echo $item->getLibelle();?></td>
		<td><?php echo $item->getPrix();?></td>
		<td><?php echo $item->getDescription();?></td>
		<td><?php echo $item->getCategorie();?></td>
		<td><input type ="checkbox" name="v[<?php echo $item->getId();?>]" value="<?php echo $item->getId();?>"/></td>
		</tr>
		<tr>
		<td>Nbre d'achats:</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>Cocher Tout<input type="checkbox" name="v6" id="tous" value="f" onclick="cocher(true);" /></td>
		</tr>
		<?php } ?>
	</table>
	<br/>
	<input type="button" value="Validation d'achat"/><br/>
	
</form>
</center>			
</div>

<?php
include 'includes/footer.inc';
?>