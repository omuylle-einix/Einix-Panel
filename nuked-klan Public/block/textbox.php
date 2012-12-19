		<div class="titre">Membres<div class="more"><a href="#">more +</a></div></div>
		<div id="memberc">
<?php
function inc_bl($modul, $bid){
    //check des modules
    $handle = opendir('modules/');
	
    while ($mod = readdir($handle)){
        if($mod != 'index.html' && file_exists('modules/Textbox/blok.php')) $autorized_modules[] = $mod;             
    }
	
    if (false===array_search($modul, $autorized_modules)){
         $blok_content = '';
    }
    else{
        ob_start();
        print eval("\$bid = \"$bid\";");
        print eval(' include ("modules/Textbox/blok.php"); ');
        $blok_content = ob_get_contents();
        ob_end_clean();
    }
    return $blok_content;
}
?>
</div>