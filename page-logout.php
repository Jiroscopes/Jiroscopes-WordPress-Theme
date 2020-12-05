<?php 

// This simply logs the user out, did it this way for customization reasons


wp_logout();

wp_redirect(site_url());

?>