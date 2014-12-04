<?php
/*------------------------------------------------------------------------
# mod_advanced_facebook_likebox - Advanced Facebook Like Box
# ------------------------------------------------------------------------
# @author - SEOHOWTO.NET
# copyright - All rights reserved by SEOHOWTO.NET
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://seohowto.net
# Technical Support:  admin@seohowto.net
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die;
$href = $params->get('href');
$width = trim($params->get('width'));
$height = trim($params->get('height'));
$background = $params->get('background');
$colorscheme = $params->get('colorscheme');
$showFaces = $params->get('showFaces');
$showHeader = $params->get('showHeader');
?>
<div class="advanced_facebook_likebox <?php echo $params->get('moduleclass_sfx');?>" style="background: <?php echo $background; ?>; width: <?php echo $width; ?>px; height: <?php echo $height; ?>px;">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=540071242746432";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php echo "<div class='fb-like-box' data-href='$href' data-width='$width' data-height='$height' data-colorscheme='$colorscheme' data-show-faces='$showFaces' data-header='$showHeader' data-stream='false' data-show-border='true'></div>";?>
<div style="font-size: 9px; color: #808080; font-weight: normal; font-family: tahoma,verdana,arial,sans-serif; line-height: 1.28; text-align: right; direction: ltr;"><a href="http://www.visualscope.com/" target="_blank" style="color: #808080;" title="Visualscope">Click here</a></div>
</div>