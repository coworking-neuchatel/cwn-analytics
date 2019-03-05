<?php
/*
Plugin Name: Coworking Neuchatel Analytics
Plugin URI: https://coworking-neuchatel.ch
Description: This plugin adds functionality to the Coworking Neuchatel website.
Version: 0.0.3
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
*/




// Scripts qui doivent figurer dans le "head" de la page.

function cowork_analytics_head() {
    
    // Tag pour Mailchimp
    // Mailchimp Connected site, for Google Remarketing
    
     ?>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/95099d311a4216d7986939c9a/6a4a578a90580ad6048857666.js");</script>
    <?php 
    
}
add_action( 'wp_head', 'cowork_analytics_head' );



// Scripts placés dans le Footer de la page.

function cowork_analytics_footer(){

// Tag pour LinkedIn :

 ?>
<script type="text/javascript">
_linkedin_data_partner_id = "57462";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=57462&fmt=gif" />
</noscript>
<?php 

// Tag pour Facebook Pixel :

 ?>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1021491014558863');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1021491014558863&ev=PageView&noscript=1"
/></noscript>
<?php 


} 

add_action('wp_footer', 'cowork_analytics_footer'); 



