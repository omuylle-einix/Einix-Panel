		<div class="titre">News<div class="more"><a href="index.php?file=News">more +</a></div></div>
		<div class="tuilecontent">
<?php

$sql = mysql_query("SELECT titre, auteur, id FROM " . $nuked['prefix'] . "_news ORDER BY date DESC LIMIT 0,7");

$compteur = 0;

while (list($titre, $auteur, $id) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);

	if (strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";
	
 $comment = '<a href="index.php?file=News&amp;op=index_comment&amp;news_id=' . $data['id'] . '">' . $data['nb_comment'] . '</a>';

	

?>
			<div class="nleft">
				<div class="ntitle"><a href="index.php?file=News&op=index_comment&news_id=<?php echo $id; ?>"/><?php echo $titre; ?></a></div>
				<div class="autor">Autor: <?php echo $auteur ?></div>
			</div>
			<div class="comment"><div class="sepl"></div><a href="#"><?php echo $comment; ?></A></div>
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
		
 <p>Aucun message n'a �t� enregistr�..</p>

<?php
	}
}
?>
</div>