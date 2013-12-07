
<?php include_once '/includes/headeradmin.inc'; ?>


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
		
		<ul class="select"><li><a href="listcommandes.php"><b>Commandes</b><!--[if IE 7]><!--></a><!--<![endif]-->
	
		
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a><b>Client</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="listprod.php">Liste des produits</a></li>
				<li><a href="Ajouterproduit.php">Ajouter produit</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a ><b>Categories</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li ><a href="listcategorie.php">Liste des Categories</a></li>
				<li ><a href="ajoutercategorie.php">Ajouter Categorie</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a><b>Clients</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="listeclients.php">Liste des Clients</a></li>
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

<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Liste des Clients</h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				<!--  start message-red -->
				<div id="message-red">
				</div>
				<!--  end message-red -->
				
			
				<!--  start message-green -->
				<div id="message-green">

				</div>
				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<center><table border="0" width="70%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left"><a href="">Numero</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nom</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Prenom</a></th>
					<th class="table-header-options line-left"><a href="">Detail</a></th>
					<th class="table-header-options line-left"><a href="">Supprimer</a></th>
				</tr>
				
				<?php
				foreach($clients as $row){?>
				<tr ><center>
					<td id="num"><?php echo $row->getId();?></td>
					<td class="alternate-row"><?php echo $row->getNom_client();?></td>
					<td><?php echo $row->getPrenom_client();?></td>
					<td class="alternate-row"><center>
					<a href="#" title="
										<?php echo "Sexe :".$row->getSexe()."</br>";?>
										<?php echo "Date de naissance :".$row->getDateNaiss()."</br>";?>
										<?php echo "Adresse :".$row->getAdresse()."</br>";?>
										<?php echo "E-mail :".$row->getEmail()."</br>";?>
										" class="icon-1 info-tooltip"></a></center>
					<td>
					<center>
					<input type="submit"  name = "id" onClick="javascript:document.getElementById('num').value" >
					
					</td>				
					</td>
					</center>
				</tr>
				<?php } ?>	
				
				</table></center>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
		
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

<?php include_once 'includes/footeradmin.inc'; ?>