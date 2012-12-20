		<div class="titre">Téléchargements<div class="more"><a href="index.php?file=Download">more +</a></div></div>
		<div class="tuilecontent">
<?php

$sql = mysql_query("SELECT titre, autor, id FROM " . $nuked['prefix'] . "_downloads ORDER BY date DESC LIMIT 0,7");

$compteur = 0;

while (list($titre, $autor, $id) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);

	if (strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";
	
        if ($visiteur >= $level)
            $sql2 = mysql_query("SELECT titre, parentid FROM " . DOWNLOAD_CAT_TABLE . " WHERE cid = '" . $cat . "'");
            list($cat_name, $parentid) = mysql_fetch_array($sql2);
            $cat_name = printSecuTags($cat_name);

            if ($cat == 0) {
                $category = "N/A";
            } else if ($parentid > 0) {
                $sql3 = mysql_query("SELECT titre, parentid FROM " . DOWNLOAD_CAT_TABLE . " WHERE cid = '" . $parentid . "'");
                list($parent_name) = mysql_fetch_array($sql3);
                $parent_name = printSecuTags($parent_name);

                $category = "<a href=\"index.php?file=Download&amp;op=categorie&amp;cat=" . $parentid . "\">" . $parent_name . "</a> -&gt; <a href=\"index.php?file=Download&amp;op=categorie&amp;cat=" . $cat . "\">" . $cat_name . "</a>";
            } else {
                $category = "<a href=\"index.php?file=Download&amp;op=categorie&amp;cat=" . $cat . "\">" . $cat_name . "</a>";
            }

?>
			<div class="nleft">
				<div class="ntitle"><a href="index.php?file=Download&op=description&dl_id=<?php echo $id; ?>"><?php echo $titre; ?></a></div>
				<div class="autor">Category: <?php echo $category; ?></div>
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