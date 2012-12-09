<?php

$sql = mysql_query("SELECT pseudo, date, avatar FROM " . $nuked['prefix'] . "_users ORDER BY date DESC LIMIT 0,8");

$compteur = 0;

while (list($pseudo) = mysql_fetch_array($sql))
{
	$titre = stripslashes($titre);
	$avatar = !$user_data['avatar'] ? 'modules/User/images/noavatar.png' : checkimg($user_data['avatar']);

	if (strlen($titre) > 25) $titre = substr($titre, 0, 25) . "(...)";
	

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