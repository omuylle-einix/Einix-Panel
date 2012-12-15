		<div class="titre">Forum<div class="more"><a href="index.php?file=Forum">more +</a></div></div>
		<div class="tuilecontent">
<?php

$sql = mysql_query("SELECT id, titre, date, forum_id, last_post, auteur, auteur_id FROM " . $nuked['prefix'] . "_forums_threads ORDER BY last_post DESC LIMIT 0, 7"); 

$compteur = 0;

while (list($thread_id, $titre, $time, $forum_id, $last_post, $auteur, $auteur_id) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);

	if (strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";
	

?>		
			<div class="nleft">
				<div class="ntitle"><a href="index.php?file=Forum&amp;page=viewtopic&amp;forum_id=<?php echo $forum_id; ?>&amp;thread_id=<?php echo $thread_id; ?>"><?php echo $titre; ?></a></div>
				<div class="autor">Autor: <?php echo $auteur; ?> || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="index.php?file=Forum&amp;page=viewtopic&amp;forum_id=<?php echo $forum_id; ?>&amp;thread_id=<?php echo $thread_id; ?>"><img src="themes/einix-panel/images/forum.png" /></a></div>
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