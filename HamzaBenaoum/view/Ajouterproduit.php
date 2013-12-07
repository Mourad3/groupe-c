<?php
include '../includes/headeradmin.inc';
include ('..\config\connect.php');
$conex = new connexion();
$conex->cnx();


?>
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			
			<div class="nav-divider">&nbsp;</div>
			<a href="" id="logout"><img src="images/shared/nav/nav_logout.gif" width="103" height="18" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			
		
		</div>
		<!-- end nav-right -->

		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="indexadmin.php"><b>Acceuill</b><!--[if IE 7]><!--></a><!--<![endif]-->
	
		
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a><b>Produits</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="listprod.php">Liste des produits</a></li>
				<li class="sub_show" ><a href="Ajouterproduit.php">Ajouter produit</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a><b>Categories</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="listcategorie.php">Liste des Categories</a></li>
				<li><a href="ajoutercategorie.php">Ajouter Categorie</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a><b>Clients</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="listeclients.php">Liste des Clients</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a><b>Messages</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="listemessage.php">Liste des messages</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
  
  <!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Ajouter Produit</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
	
		<!-- start id-form -->
		<form name="form1" action="..\controller\ajouteffectuer.php" method="POST" enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Nom Produit:</th>
			<td><input type="text" name="nomproduit" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Categorie:</th>
		<td>	
		<select  class="styledselect_form_1" name="categorie">
		 <?php
			$sql='select * from categorie';
			$resultat = mysql_query($sql);
			while($row=mysql_fetch_array($resultat))
			{
			?>
			<option value="<?php echo $row[0] ; ?>"><?php echo $row[1] ; ?></option>
			<?php
			}
		?>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top">Couleur</th>
		<td>	
		<select  class="styledselect_form_1" name="couleur">
			<option value="rouge">rouge</option>
			<option value="vert">vert</option>
			<option value="noir">noir</option>
			<option value="bleu">bleu</option>
			<option value="jaune">jaune</option>
		</select>
		</td>
		<td></td>
		</tr> 
		<tr>
			<th valign="top">Prix:</th>
			<td><input type="text" class="inp-form" name="prix" /></td>
			<td></td>
		</tr>
	<tr>
			<th valign="top">Quantité:</th>
			<td><input type="number" name="quantite" class="inp-form" value="1" min="1"  /></td>
			<td></td>
		</tr>
	
	
	<tr>
		<th valign="top">Description:</th>
		<td><textarea name="description" rows="" cols="" class="form-textarea"></textarea></td>
		
	</tr>
	<tr>
	<th>Image :</th>
	<td><input name="image" type="file" class="file_1" width="80" height="80"  /></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF, PNG 5MB max par image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
	<!-- end id-form  -->

	</td>
	<td>
		
		<!-- <div id="related-act-bottom">
			<div id="related-act-top">
				 <?php echo '<img src="$_FILES["image"]["tmp_name"]" width="300" height="400" alt="" />' ; ?>
				</div>
			</div>-->
	</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>

<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<?php
include 'includes/footeradmin.inc';
?>