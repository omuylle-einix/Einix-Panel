<?php
//Template Einix-Panel for Nuked-Klan CMS version 1.7.9
//LoveForEver & Einix-Studio (C) 

defined('INDEX_CHECK') or die ('<div style="text-align: center">Action non-autoris?e !</div>');

function checkHome(){
	return (substr($_SERVER['REQUEST_URI'], -9) == 'index.php' || $_SERVER['REQUEST_URI'] == '/') ? true : false;
}

$config = array('theme' => 'themes/einix-panel');
function top()
{
    global $nuked, $user, $menu, $config;
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
	<meta name="author" content="Design by LoveForEver, code by LoveForEver" />
	<title><?php echo $nuked['name'] . ' - ' . $nuked['slogan']; ?></title>
	<meta name="description" content="<?php echo $nuked['description']; ?>" />
	<meta name="keywords" content="<?php echo $nuked['keyword']; ?>" />
	<meta name="robots" content="index, follow" />
	<link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	
	<link rel="stylesheet" media="screen" type="text/css" title="style" href="themes/einix-panel/style.css" />
</head>
<body>
<div id="site">

<div id="header">
	<div id="logo"><img src="themes/einix-panel/images/logo.png" alt="" /><span>Einix-Tuile</span></div>
	<div id="login"></div>
</div>

<div id="menu">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Archives</a></li>
		<li><a href="#">Téléchargements</a></li>
		<li><a href="#">Galeries</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Forum</a></li>
	</ul>
	<div class="clear"></div>
</div>

<div id="tuiles">
	<div id="left">
		<div class="titre">News<div class="more"><a href="#">more +</a></div></div>
		<div class="tuilecontent">
				<?php
				}
				function footer()
				{
				global $nuked, $user, $config;

				?>
		</div>			

	</div>
	
	<div id="right">
		<div class="titre">Forum<div class="more"><a href="#">more +</a></div></div>
		<div class="tuilecontent">
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Why not MIUIV4 for Miro</div>
				<div class="autor">Autor: LoveForEver || Date: 07-12-12</div>
			</div>
			<div class="forum"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/forum.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>

		</div>
	</div>
</div>

<div id="tuiles">
	<div id="left">
		<div class="titre">Téléchargements<div class="more"><a href="#">more +</a></div></div>
		<div class="tuilecontent">
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
			
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		
			<div class="nleft">
				<div class="ntitle">Cyanogenmod 10</div>
				<div class="autor">Category: Xperia Miro</div>
			</div>
			<div class="download"><div class="sepl"></div><a href="#"><img src="themes/einix-panel/images/download.png" /></a></div>
			<div class="clear"></div>
			<div class="border"></div>
		</div>
	</div>
	
	<div id="right">
		<div class="titre">Membres<div class="more"><a href="#">more +</a></div></div>
		<div id="memberc">
			<div class="memberpic">
				<a href="#"><img src="images/avatar.png"/></a>
				<div class="mname">Cid</div>
			</div>
			<div class="memberpic">
				<a href="#"><img src="http://love-design.eu/upload/User/1343943706.png"/></a>
				<div class="mname">LoveForEver</div>
			</div>	
			<div class="memberpic">
				<a href="#"><img src="http://tmnf.fr/criss/avatar2.jpg"/></a>
				<div class="mname">Criss</div>
			</div>	
			<div class="memberpic">
				<a href="#"><img src="http://img10.imageshack.us/img10/5224/c26d3261ca2e296a115acdc.png"/></a>
				<div class="mname">Flux</div>
			</div>		
			<div class="memberpic">
				<a href="#"><img src="http://www.nuked-klan.org/upload/User/1346851294.png"/></a>
				<div class="mname">Nk`Pomme</div>
			</div>
			<div class="memberpic">
				<a href="#"><img src="http://www.nuked-klan.org/upload/Forum/28076c04c5.jpg"/></a>
				<div class="mname">Guezmer</div>
			</div>
			<div class="memberpic">
				<a href="#"><img src="http://www.nuked-klan.org/modules/Forum/images/no_avatar.png"/></a>
				<div class="mname">Hayanno</div>
			</div>	
			<div class="memberpic">
				<a href="#"><img src="http://www.bia.teambattlefield.fr/upload/User/1337961349.png"/></a>
				<div class="mname">abbe</div>
			</div>				
		</div>
	</div>
</div>
<div id="tuiles">
	<div id="left">
		<div class="titre">Galeries<div class="more"><a href="#">more +</a></div></div>
	</div>
	
	<div id="right">
		<div class="titre">Téléchargements<div class="more"><a href="#">more +</a></div></div>
	</div>
</div>
</div>

<div id="footer">
<div id="fcontent">
	<div id="fname">Einix-Panel</div>
	<div id="fcredits">Webdesign by Einix-Studio <br/>NK-Powered</div>
</div>
<Div>
</body>
</html>
<?php 
exit;
}
function news($data)
{

 $comment = '<a href="index.php?file=News&amp;op=index_comment&amp;news_id=' . $data['id'] . '">' . $data['nb_comment'] . '</a>';

?>
			<div class="nleft">
				<div class="ntitle"><?php echo $data['titre']; ?></div>
				<div class="autor">Autor: <?php echo $data['auteur']; ?></div>
			</div>
			<div class="comment"><div class="sepl"></div><a href="#"><?php echo $comment; ?></A></div>
			<div class="clear"></div>
			<div class="border"></div>	
<?php
}
function opentable(){}
function closetable(){}
?>