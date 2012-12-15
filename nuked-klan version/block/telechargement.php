		<div class="titre">Téléchargements<div class="more"><a href="index.php?file=Download">more +</a></div></div>
		<div class="tuilecontent">
<?php

$sql = mysql_query("SELECT titre, autor, id FROM " . $nuked['prefix'] . "_downloads ORDER BY date DESC LIMIT 0,7");

$compteur = 0;

while (list($titre, $autor, $id) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);

	if (strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";
	

?>
			<div class="nleft">
				<div class="ntitle"><a href="index.php?file=Download&op=description&dl_id=<?php echo $id; ?>"><?php echo $titre; ?></a></div>
				<div class="autor">Category: Xperia Miro</div>
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
		
 <p>Aucun message n'a été enregistré..</p>

<?php
	}
}
?>
</div>