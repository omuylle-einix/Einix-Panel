		<div class="titre">Membres<div class="more"><a href="#">more +</a></div></div>
		<div id="memberc">
<?php

$sql = mysql_query("SELECT pseudo, avatar, date FROM " . $nuked['prefix'] . "_users ORDER BY date DESC LIMIT 0,8");

$compteur = 0;

while (list($pseudo, $avatar, $date) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);

	if (strlen($titre) > 70) $titre = substr($titre, 0, 70) . "(...)";
	
            if(empty($avatar)) $avatar = "modules/User/images/noavatar.png";

	

?>
			<div class="memberpic">
				<a href="index.php?file=Members&op=detail&autor=<?php echo $pseudo; ?>"><img src="<?php echo $avatar; ?>"/></a>
				<div class="mname"><a href="index.php?file=Members&op=detail&autor=<?php echo $pseudo; ?>"><?php echo $pseudo; ?></a></div>
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

 <p>Aucun message n'a été enregistré..</p>

<?php
	}
}
?>
</div>