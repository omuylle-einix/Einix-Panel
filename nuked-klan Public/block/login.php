<?php
# Template purityblue for Nuked-Klan CMS version 1.7.9
# block_login.php

defined('INDEX_CHECK') or die ('<div style="text-align: center;">Action non-autorisée !</div>');

if (!$user)
{
?>
		<div id="loginc">
			<div id="loginpic"><img src="modules/User/images/noavatar.png" /></div>
			<div id="logincontent">
            <form id="loginForm" action="index.php?file=User&amp;nuked_nude=index&amp;op=login" method="post">
				<div id="loginprof">
					<div id="msg"><input id="pseudo" name="pseudo" value="Pseudo" type="text" autocomplete="on" placeholder="Username"></div>
					<div id="compte"><input id="pass" name="pass" value="******" type="password" placeholder="Password"></div>
					<div id="submit"><button type="submit">Sign in</button></div>
					<div id="joinus"><a href="index.php?file=User&op=reg_screen">Join Us</a></div>
				</div>
				<div class="clear"></div>
            </form>
			</div>
		</div>
		<div class="clear"></div>
<?php
}
else
{
    if($user >= 3)
    {
        $admin = ' - <a href="index.php?file=Admin" title="Panneau d\'administration">Admin</a>';
    }
	if ($avatar != "off")
	{
		$select_avatar="SELECT avatar FROM " . USER_TABLE . " WHERE id = '" . $user[0] . "'";
		$sql_avatar=mysql_query($select_avatar);
		$avatar = !$user_data['avatar'] ? 'modules/User/images/noavatar.png' : checkimg($user_data['avatar']);

	}
	if ($c > 0) $blok['content'] .= "<hr style=\"height: 1px;\" />\n";
	{

        $sql2 = mysql_query("SELECT mid FROM " . USERBOX_TABLE . " WHERE user_for = '" . $user[0] . "' AND status = 1");
        $nb_mess_lu = mysql_num_rows($sql2);
	}
?>
		<div id="loginc">
			<div id="loginpic"><img src="<?php echo $avatar; ?>" /></div>
			<div id="logincontent2">
            <form id="loginForm" action="index.php?file=User&amp;nuked_nude=index&amp;op=login" method="post">
				<div id="loginprof">
					Bienvenue, <?php echo $user[2]; ?><br />
					Vous avez <a href="#"><?php echo $user[5]; ?> messages</a><br /><br />
					<div id="compte"><a href="index.php?file=User">Mon compte</a> - <a href="index.php?file=User&nuked_nude=index&op=logout">Deconnexion</a><?php echo $admin; ?></div>
					
				</div>
				<div class="clear"></div>
            </form>
			</div>
		</div>
		<div class="clear"></div>
<?php
}
?>