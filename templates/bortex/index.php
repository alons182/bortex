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
$doc->addStyleSheet('templates/'.$this->template.'/css/colorbox.css');
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
                        <a href="https://www.facebook.com/bortexcostarica" title="Facebook" target="_blank"><i class="icon icon-facebook"></i></a>
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
                        <!--<a href="http://www.guanaprint.com" title="Guanaprint" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-guanaprint.png" alt="Guanaprint" /></a>-->
                        <a href="http://www.avotz.com" title="Avotz" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo-avotz.png" alt="Avotz Webworks" /></a>
                    </div>
                    <div class="fans">
                        <jdoc:include type="modules" name="fans" style="none" />
                    </div>

                </div>
                <a class="copyright" href="#">copyright @ 2014</a>
            </footer>
        </div>
        

        
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.validate.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.form.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.colorbox-min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-21485543-12', 'auto');
          ga('send', 'pageview');

        </script>

        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
