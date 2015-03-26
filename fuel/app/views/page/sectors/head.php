<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DucThang
 * Date: 3/26/15
 * Time: 9:34 AM
 */

echo Asset::css($data['css_files']);

echo Asset::js($data['js_files']);

?>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
        <?php echo Asset::css('theme-car/ie.css', array('media')); ?>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->