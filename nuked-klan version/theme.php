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
	<div id="logo"><img src="themes/einix-panel/images/logo.png" alt="" /><span><?php echo $nuked['name']; ?></span></div>
	<div id="login">
		<div id="loginc">
			<div id="loginpic"></div>
			<div id="logincontent">
			dwfhsrh rehzrsh
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div id="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="index.php?file=News">News</a></li>
		<li><a href="index.php?file=Archives">Archives</a></li>
		<li><a href="index.php?file=Download">Téléchargements</a></li>
		<li><a href="index.php?file=Gallery">Galeries</a></li>
		<li><a href="index.php?file=Contact">Contact</a></li>
		<li><a href="index.php?file=Forum">Forum</a></li>
	</ul>
	<div class="clear"></div>
</div>

<div id="<?php echo !checkHome() ? 'big' : '' ; ?>">
<div id="<?php echo !checkHome() ? 'bigc' : '' ; ?>">
<?php if(checkHome() == true){ ?>
<div id="tuiles">
	<div id="left">
		<div class="titre">News<div class="more"><a href="index.php?file=News">more +</a></div></div>
		<div class="tuilecontent">
		<?php include(dirname(__FILE__) . '/block/news.php'); ?>
<?php } ?>
				<?php
				}
				function footer()
				{
				global $nuked, $user, $config;
				?>
<?php if(checkHome() == true){ ?>
		</div>			

	</div>
	
	<div id="right">
		<div class="titre">Forum<div class="more"><a href="index.php?file=Forum">more +</a></div></div>
		<div class="tuilecontent">
		<?php include(dirname(__FILE__) . '/block/forum.php'); ?>
		</div>
	</div>
</div>

<div id="tuiles">
	<div id="left">
		<div class="titre">Téléchargements<div class="more"><a href="index.php?file=Download">more +</a></div></div>
		<div class="tuilecontent">
		<?php include(dirname(__FILE__) . '/block/telechargement.php'); ?>
		</div>
	</div>
	
	<div id="right">
		<div class="titre">Membres<div class="more"><a href="#">more +</a></div></div>
		<div id="memberc">
		<?php include(dirname(__FILE__) . '/block/membre.php'); ?>
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
<?php } ?>
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
 $bigcomment = '<a href="index.php?file=News&amp;op=index_comment&amp;news_id=' . $data['id'] . '">' . $data['nb_comment'] . ' comments' . '</a>';
 $title = '<a href="index.php?file=News&amp;op=index_comment&amp;news_id=' . $data['id'] . '">' . $data['titre'] . '</a>';

?>
			
			<?php if(checkHome() == false){ ?>
			<div class="bignews">
				<div class="bigtitre"><?php echo $data['titre']; ?></div>
				<div class="border"></div>
				<?php echo $data['texte']; ?>
				<div class="bigcomment"><?php echo $bigcomment; ?></div>
			</div>
			
			<?php } ?>
<?php
}
function opentable(){}
function closetable(){}
?>