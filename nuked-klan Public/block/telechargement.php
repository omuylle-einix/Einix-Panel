		<div class="titre">Téléchargements<div class="more"><a href="index.php?file=Download">more +</a></div></div>
		<div class="tuilecontent">
<?php

$sql = mysql_query("SELECT id, titre, autor, type FROM ".DOWNLOAD_TABLE." ORDER BY date DESC LIMIT 0,7");

$compteur = 0;

                while(list($id, $titre, $autor, $cat) = mysql_fetch_array($sql))
                {
				
					$sql2 = mysql_query("SELECT titre, parentid FROM " . DOWNLOAD_CAT_TABLE . " WHERE cid = '" . $cat . "'");
					list($cat_name, $parentid) = mysql_fetch_array($sql2);
					$cat_name = printSecuTags($cat_name);
						
					$sql3 = mysql_query("SELECT titre FROM " . DOWNLOAD_CAT_TABLE . " WHERE cid = '" . $parentid . "'");
					list($parent_name) = mysql_fetch_array($sql3);
					$parent_name = printSecuTags($parent_name);
 
                    if(strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";

?>
			<div class="nleft">
				<div class="ntitle"><a href="index.php?file=Download&op=description&dl_id=<?php echo $id; ?>"><?php echo $titre; ?></a></div>
				<div class="autor">Category: <a href="index.php?file=Download&amp;op=categorie&amp;cat=<?php echo $parentid; ?>"><b><?php echo $parent_name; ?></b></a> -&gt; <a href="index.php?file=Download&amp;op=categorie&amp;cat=<?php echo $cat;?>"><?php echo $cat_name; ?></a></div>
			</div>
			<div class="download"><div class="sepl"></div><a href="index.php?file=Download&op=description&dl_id=<?php echo $id; ?>"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
<?php
	$compteur++;
}

if ($compteur == 7);
else
{
	$na = 1;
	$nbre_na = 7 - $compteur;
	while ($na <= $nbre_na)
	{
		$na++;
?>
		
			<div class="nleft">
				<div class="ntitle"><span style="position:relative;top:5px;">Aucun Téléchargement disponible pour le moment</span></div>
				<div class="autor"></div>
			</div>
			<div class="download"><div class="sepl"></div><img src="themes/einix-panel/images/download.png" /></div>
			<div class="clear"></div>
			<div class="border"></div>

<?php
	}
}
?>
</div>