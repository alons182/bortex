<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.Puravida
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');



?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
     
     
</head>


 <body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>">

        <div class="page">
            <header class="header">
                <div class="wrapper">
                    <a id="logo" href="<?php echo $this->baseurl ?>" title="Bortex"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Bortex"></a>
                    <div id="btn_nav">Menu <i class="icon-menu"></i></div>
                    <nav id="menu">
                        <jdoc:include type="modules" name="menu" style="none" />
                    </nav>
                    <div class="social">
                        <a href="#" title="Facebook"><i class="icon icon-facebook"></i></a>
                        <a href="#" title="Twitter"><i class="icon icon-twitter"></i></a>
                    </div>
                </div>
            </header>
            <section id="main">
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="more-products" style="none" />
                
            </section>
            <footer>
                <div class="wrapper">
                    <a id="logo_f"href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Bortex"></a>
                    <h5 class="services">Telas • Bordados • Sublimación</h5>
                    <nav id="menu_f">
                        <jdoc:include type="modules" name="menu-footer" style="none" />
                    </nav>
                    <div class="social">
                        <h5 class="empresas">Empresas Asociadas</h5>
                        <a href="http://www.guanaprint.com" title="Guanaprint" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-guanaprint.png" alt="Guanaprint" /></a>
                        <a href="http://www.avotz.com" title="Avotz" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-avotz.png" alt="Avotz Webworks" /></a>
                    </div>

                </div>
                <a class="copyright" href="#">copyright @ 2014</a>
            </footer>
        </div>
        

        
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.validate.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.form.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

        
        <script>
            /*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');*/
        </script> 

        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
