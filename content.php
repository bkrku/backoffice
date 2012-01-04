<?php
/**
 * @author Made
 filecontent.php
 * Enter description here ...
 * @param $vari
 */

function content($vari){
	$url 	= $vari;
	$vari 	= "web_apps/".$url."/".$url;
	$vari  .= ".php";
	include $vari;	
	
	
}
?>