<?php
include 'includes/headeradmin.inc';
?>
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			
			<div class="nav-divider">&nbsp;</div>
			<a href="" id="logout"><img src="img/shared/nav/nav_logout.gif" width="103" height="18" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			
		
		</div>
		<!-- end nav-right -->

		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="listcommandes.php"><b>Commandes</b><!--[if IE 7]><!--></a><!--<![endif]-->
	
		
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="current"><li><a><b>Produits</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="listprod.php">Liste des produits</a></li>
				<li ><a href="Ajouterproduit.php">Ajouter produit</a></li>
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
  
  <!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Liste des produits</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="img/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="img/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				<!--  start message-red -->
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Erreur. <a>Essayer encore une fois.</a></td>
					<td class="red-right"><a class="close-red"><img src="img/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-red -->
				
			
				<!--  start message-green -->
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Produit Ajoutée avec succée </td>
					<td class="green-right"><a class="close-green"><img src="img/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nom Produit</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Type Produit</a></th>
					<th class="table-header-repeat line-left"><a href="">Prix</a></th>
					<th class="table-header-repeat line-left"><a href="">Description</a></th>
					<th class="table-header-repeat line-left"><a href="">Quantité</a></th>
			        <th class="table-header-repeat line-left"><a href="">Catégorie</a></th>
			        <th class="table-header-repeat line-left"><a href="">image</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
				<tr>
					
					<td>Produit1</td>
					<td>Type1</td>
					<td>100</td>
					<td>description de produit</td>
					<td>10</td>
					<td>categorie1</td>
					<td><img src="img/products/1.jpg" width="40"  height="40"/></td>
					<td class="options-width">
					<a href="" title="Modifier" class="icon-1 info-tooltip"></a>
					<a href="" title="Supprimer" class="icon-2 info-tooltip"></a>
					<a href="" title="Valider" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
				<tr class="alternate-row">
					
					<td>Produit2</td>
					<td>Type2</td>
					<td>100</td>
					<td>description de produit</td>
					<td>10</td>
					<td>categorie2</td>
					<td><img src="img/products/2.jpg" width="40"  height="40"/></td>
					<td class="options-width">
					<a href="" title="Modifier" class="icon-1 info-tooltip"></a>
					<a href="" title="Supprimer" class="icon-2 info-tooltip"></a>
					<a href="" title="Valider" class="icon-5 info-tooltip"></a>
					</td>
				</tr>
			
				</table>
				<!--  end product-table................................... --> 
				<table>
					
					<tr>
						<td><input type="button" value="" class="form-supselect" /></td>
					</tr>
				</table>
				
				</form>
			</div>
			<!--  end content-table  -->
		
			
			<!--  start paging..................................................... -->
			<!--<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 1</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Nombre de lignes</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
<?php
include 'includes/footeradmin.inc';
?>