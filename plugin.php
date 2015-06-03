<?php
/*
Plugin Name: yourls-quick-piwik
Plugin URI: https://github.com/3rdLOF/yourls-quick-piwik
Description: Simple piwik plugin
Version: 1.0
Author: 3rdLOF
Author URI: http://shorty.3rdlof.com/zme93
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action( 'html_head', 'trackWithPiwik' );

function trackWithPiwik() {
        echo "<script type=\"text/javascript\">

  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u='//ADD YOUR PIWIK INSTALLATION URL HERE/';
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', ADD YOUR SITE ID HERE]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();

</script>       ";
        echo "<noscript><p><img src=\"//ADD YOUR PIWIK INSTALLATION URL HERE/piwik.php?idsite=ADD YOUR SITE ID HERE\" style=\"border:0;\" alt=\"\" /></p></noscript>" ;

}
?>

