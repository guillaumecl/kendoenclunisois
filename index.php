<?php defined('_JEXEC') or die;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <!--
		Kendo en Clunisois

		Le code source de ce template peut être récupéré sur https://www.github.com/guillaumecl/kendoenclunisois

		The latest source can be found at https://www.github.com/guillaumecl/kendoenclunisois

	  -->
<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault())
{
?>
	<audio src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/sound/bol_tibetain.mp3"
		   type="audio/mpeg"
		   autoplay="autoplay">
	</audio>
<?php
}
?>
	<div id="cadre_exterieur">
	  <div id="logo"></div>
	  <div id="chemin"><jdoc:include type="modules" name="chemin" style="xhtml" /></div>
	  <div id="recherche"><jdoc:include type="modules" name="recherche" style="xhtml" /></div>
	  <div class="clr"></div>
	  <div id="menu_haut"><jdoc:include type="modules" name="menu_haut" style="xhtml" /></div>
	  <div class="clr"></div>
	  <div id="cadre_texte"><jdoc:include type="component" style="xhtml" /></div>
	  <div class="clr"></div>
	  <div id="pied_de_page"><jdoc:include type="modules" name="footer" style="xhtml" /></div>
	</div>
  </body>
