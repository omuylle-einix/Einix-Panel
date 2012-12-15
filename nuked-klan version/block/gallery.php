		<div class="titre">Galeries<div class="more"><a href="index.php?file=Gallery">more +</a></div></div>
		<div id="memberc">
<?php

$sql = mysql_query("SELECT titre, url, sid FROM " . $nuked['prefix'] . "_gallery ORDER BY date DESC LIMIT 0,8");

$compteur = 0;

while (list($titre, $url, $sid) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);
	$avatar = !$user_data['avatar'] ? 'modules/User/images/noavatar.png' : checkimg($user_data['avatar']);

	if (strlen($titre) > 10) $titre = substr($titre, 0, 10) . "(...)";
	

?>
			<div class="memberpic">
				<a href="index.php?file=Gallery&op=description&sid=<?php echo $sid; ?>"><img src="<?php echo $url; ?>"/></a>
			</div>			
<?php
	$compteur++;
}

if ($compteur == 8);
else
{
	$na = 1;
	$nbre_na = 8 - $compteur;
	while ($na <= $nbre_na)
	{
		$na++;
?>

			<div class="memberpic">
				<img src="<?php echo $avatar; ?>"/>
			</div>	

<?php
	}
}
?>
</div>