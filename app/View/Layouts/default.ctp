<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Vote');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootswatch');
		echo $this->Html->css('bootstrap-responsive.min');
		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body  class="preview">
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="../">Vote</a>
       <div class="nav-collapse collapse" id="main-menu">
        <ul class="nav" id="main-menu-left">
          <li><?php echo $this->Html->link('Candidates','/Candidates')?></li>
          <li><a href="../#gallery">Gallery</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Preview <b class="caret"></b></a>
            <ul class="dropdown-menu" id="swatch-menu">
              <li><a href="../default/">Default</a></li>
              <li class="divider"></li>
              <li><a href="../amelia/">Amelia</a></li>
              <li><a href="../cerulean/">Cerulean</a></li>
              <li><a href="../cosmo/">Cosmo</a></li>
              <li><a href="../cyborg/">Cyborg</a></li>
              <li><a href="../flatly/">Flatly</a></li>
              <li><a href="../journal/">Journal</a></li>
              <li><a href="../readable/">Readable</a></li>
              <li><a href="../simplex/">Simplex</a></li>
              <li><a href="../slate/">Slate</a></li>
              <li><a href="../spacelab/">Spacelab</a></li>
              <li><a href="../spruce/">Spruce</a></li>
              <li><a href="../superhero/">Superhero</a></li>
              <li><a href="../united/">United</a></li>
            </ul>
          </li>
          <li class="dropdown" id="preview-menu">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Download <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a target="_blank" href="bootstrap.min.css">bootstrap.min.css</a></li>
              <li><a target="_blank" href="bootstrap.css">bootstrap.css</a></li>
              <li class="divider"></li>
              <li><a target="_blank" href="variables.less">variables.less</a></li>
              <li><a target="_blank" href="bootswatch.less">bootswatch.less</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav pull-right" id="main-menu-right">
          <li><a rel="tooltip" target="_blank" href="http://builtwithbootstrap.com/" title="Showcase of Bootstrap sites &amp; apps" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'builtwithbootstrap']);">Built With Bootstrap <i class="icon-share-alt"></i></a></li>
          <li><a rel="tooltip" target="_blank" href="https://wrapbootstrap.com/?ref=bsw" title="Marketplace for premium Bootstrap templates" onclick="_gaq.push(['_trackEvent', 'click', 'outbound', 'wrapbootstrap']);">WrapBootstrap <i class="icon-share-alt"></i></a></li>
        </ul>
       </div>
     </div>
   </div>
 </div>

		<div id="content" class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
